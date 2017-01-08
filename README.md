# auction

[Lowest unique bid auction](https://en.wikipedia.org/wiki/Unique_bid_auction) app written in PHP

## How it works

Create a `Product` and specify its `name` and `cost`. And then from it, create an `Auction`. The `Auction` also has a `name`, `targetReturn` and `scaleLimit`. The product you associate with an auction will be the auction's prize. The `scaleLimit` is the max amount of digits on the right of a decimal point. The product's `cost` and the auction's `targetReturn` both denotes monetary figures for the auction business - expense and revenue. It will allow the auction business to become *deterministic* in nature.

### Product's `cost` vs. Auction's `targetReturn`

The product's `cost` is straightforward - it is (literally) how much the business spent for it. With auction's `targetReturn`, the business can configure this value if it wants to *profit* or *lose* from the auction. Each `bid` on the auction has its `return` value individually tracked, and updates the auction's `targetReturn`. Once the target is reached, an `event` will be triggered and a `listener` will process the auction's `bids` to determine the winning bid, the `winner` - the *lowest unique bid*.

*Note:* It is necessary for the business that the auction ends not based on the number of bids but on the sum of all bids' `return` values. 

### How is a bid's `return` value determined?

See `Wallet` and `BidPack` section

### `Wallet` and `BidPack`

`BidPack` is what bidders buy to be able to bid to auctions. Each `BidPack` contains at least X amount of *credits*, and each `Bid` will cost a bidder 1 or more credits that will be deducted to the `remainingCredits` of any of the bidder's **`Wallet` with the least `returnPerCredit` value**.

### `Auction`'s credit cost

As more bids come in, and the sum of all bids' `return` values approaches the auction's `targetReturn`, the `Auction`'s credit cost will increase. This encourages bidders to bid early in the auction, ending it faster. *TODO:* progressive credit cost implementation.

## Quick start

Run `docker-compose up -d` and then visit `http://localhost:8080`.

> (c) Ben Sarmiento, 2017+
