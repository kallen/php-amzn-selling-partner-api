<?php

namespace Jasara\AmznSPA\Tests\Unit\Resources;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Str;
use Jasara\AmznSPA\AmznSPA;
use Jasara\AmznSPA\DataTransferObjects\Responses\ProductPricing\GetOffersResponse;
use Jasara\AmznSPA\DataTransferObjects\Responses\ProductPricing\GetPricingResponse;
use Jasara\AmznSPA\Tests\Unit\UnitTestCase;

class ProductPricingResourceTest extends UnitTestCase
{
    public function testGetPricing()
    {
        list($config, $http) = $this->setupConfigWithFakeHttp('/product-price/get-pricing');

        $item_type = 'asin';
        $marketplace_id = 'ATVPDKIKX0DER';

        $amzn = new AmznSPA($config);
        $amzn = $amzn->usingMarketplace('ATVPDKIKX0DER');
        $response = $amzn->product_pricing->getPricing(
            marketplace_id: $marketplace_id,
            item_type:  $item_type,
        );

        $this->assertInstanceOf(GetPricingResponse::class, $response);

        $price = $response->payload->first();

        $this->assertEquals('Success', $price->status);
        $this->assertEquals('B00V5DG6IQ', $price->asin);
        $this->assertEquals('ATVPDKIKX0DER', $price->product->identifiers->marketplace_asin->marketplace_id);

        $http->assertSent(function (Request $request) {
            $this->assertEquals('GET', $request->method());
            $this->assertEquals('https://sellingpartnerapi-na.amazon.com/products/pricing/v0/price', $request->url());

            return true;
        });
    }

    public function testGetCompetitivePricing()
    {
        list($config, $http) = $this->setupConfigWithFakeHttp('/product-price/get-competitive-pricing');

        $item_type = 'asin';
        $marketplace_id = 'ATVPDKIKX0DER';

        $amzn = new AmznSPA($config);
        $amzn = $amzn->usingMarketplace('ATVPDKIKX0DER');
        $response = $amzn->product_pricing->getCompetitivePricing(
            marketplace_id: $marketplace_id,
            item_type:  $item_type,
        );

        $this->assertInstanceOf(GetPricingResponse::class, $response);

        $competitive_price = $response->payload->first();

        $this->assertEquals('Success', $competitive_price->status);
        $this->assertEquals('B00V5DG6IQ', $competitive_price->asin);
        $this->assertEquals(10.00, $competitive_price->product->offers[0]->buying_price->listing_price->amount);

        $http->assertSent(function (Request $request) {
            $this->assertEquals('GET', $request->method());
            $this->assertEquals('https://sellingpartnerapi-na.amazon.com/products/pricing/v0/competitivePrice', $request->url());

            return true;
        });
    }

    public function testGetListingOffers()
    {
        list($config, $http) = $this->setupConfigWithFakeHttp('/product-price/get-listing-offers');

        $marketplace_id = 'ATVPDKIKX0DER';
        $item_condition = 'CLUB';
        $seller_sku = Str::random();

        $amzn = new AmznSPA($config);
        $amzn = $amzn->usingMarketplace('ATVPDKIKX0DER');
        $response = $amzn->product_pricing->getListingOffers(
            marketplace_id: $marketplace_id,
            item_condition: $item_condition,
            seller_sku: $seller_sku,
        );

        // dd($response);
        $this->assertInstanceOf(GetOffersResponse::class, $response);

        $offers = $response->payload;

        $this->assertEquals('ATVPDKIKX0DER', $offers->marketplace_id);
        $this->assertEquals('NEW', $offers->item_condition);
        $this->assertEquals('NABetaASINB00V5DG6IQ', $offers->identifier->seller_sku);

        $http->assertSent(function (Request $request) use ($seller_sku) {
            $this->assertEquals('GET', $request->method());
            $this->assertEquals('https://sellingpartnerapi-na.amazon.com/products/pricing/v0/listings/' . $seller_sku . '/offers', $request->url());

            return true;
        });
    }
}
