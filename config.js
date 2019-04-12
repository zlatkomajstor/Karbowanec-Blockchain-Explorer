var api = 'http://explorer.balkancoin.org/services/node_web';
var apiList = ["http://31.3.91.233:38777", "http://195.201.112.102:38777"];
var blockTargetInterval = 30;
var coinUnits = 100000000;
var symbol = 'BKC';
var refreshDelay = 30000;
var whiteTheme = "css/themes/white-theme.css";
var nightTheme = "css/themes/dark-theme.css";
// pools stats by MainCoins
var poolsStat =
	[
		["pool.balkancoin.org", "http://miner.balkancoin.org:8147/stats"],
		["easyhash.pro/bkc", "https://easyhash.pro/bkc/api/stats"],
		["bkc.bubblemine.com", "http://bkcminer.bubblemine.com:8147/stats"]
    ];
var nodesStat =
	[
        ["http://31.3.91.233:38777"],
		["http://195.201.112.102:38777"]
    ];
