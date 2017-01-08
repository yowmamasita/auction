# auction

[Lowest unique bid auction](https://en.wikipedia.org/wiki/Unique_bid_auction) app written in PHP

## How it works

Create a `Product` and specify its `name` and `cost`. And then from it, create an `Auction`. The `Auction` also has a `name`, `targetReturn` and the `scaleLimit`. The product you associate with an auction will be the auction's prize. The `scaleLimit` is the max amount of digits on the right of a decimal point. The product's `cost` and the auction's `targetReturn` both denotes monetary figures for the auction business - expense and revenue. It will allow the auction business to become *deterministic* in nature.

### Product's `cost` vs. Auction's `targetReturn`

The product's `cost` is straightforward - it is (literally) how much the business spent for it. With auction's `targetReturn`, the business can configure this value if it wants to *profit* or *lose* from the auction. Each `bid` on the auction has its `return` value individually tracked, and updates the auction's `targetReturn`. Once it's reached, an `event` will be triggered and a `listener` will process the auction's `bids` to determine the winning bid, the `winner` - the *lowest unique bid*.

### How is a bid's `return` value determined?

*TODO*: `Wallet` and `BidPack`

> (c) Ben Sarmiento, 2017+
