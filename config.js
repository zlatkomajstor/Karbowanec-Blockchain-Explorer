var api = 'http://199.247.19.238:38777';
var apiList = ["http://132.148.135.136:38777", "http://132.148.135.237:38777"];
var blockTargetInterval = 30;
var coinUnits = 100000000;
var symbol = 'BKC';
var refreshDelay = 30000;
// pools stats by MainCoins
var networkStat = {
    "bkc": [
        ["pool.balkancoin.org", "http://miner.balkancoin.org:8147/stats"],
        ["pool2.balkancoin.org", "http://miner2.balkancoin.org:8147/stats"],
        ["bkc.go-mine.it", "https://bkc.go-mine.it/api/pool/stats"]
    ]
};
