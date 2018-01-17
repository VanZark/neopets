var petList = ["acara", "aisha", "blumaroo", "bori", "bruce", "buzz", "chia", "elephante", "eyrie", "flotsam", "gelert", "gnorbu", "grarrl", "ixi", "jubjub", "kacheek", "kau", "korbat", "kougra", "kyrii", "lenny", "lupe", "meerca", "moehog", "mynci", "nimmo", "ogrin", "peophin", "pteri", "quiggle", "scorchio", "shoyru", "skeith", "techo", "tuskaninny", "uni", "usul", "vandagyre", "wocky", "xweetok", "yurble", "zafara"];
var colorList = ["red", "blue", "yellow", "green"];

var user = {
	id: 0000,
	name: "VanZark",
	neoPoints: 1500,
	neoCash: 150,
	gender: "male",
	country: "Canada",
	joinDate: "12/5/2017",
	primary: 0,
	avatar: 0,
};

var avatars = [1, 1, 1, 0, 0, 0, 0, 0];

// 0=PetId, 1=Name, 2=Species, 3=Color, 4=Birthday, 5=Hunger, 6=Mood, 7=Level, 8=CurrentHP, 9=MaxHP, 10=Str, 11=Agi, 12=Def, 13=Int
var pets = [
  [0000, "PetName", 1, 0, "12/5/2017", 100, 100, 1, 10, 10, 5, 6, 7, 8],
  [0000, "PetName", 1, 0, "12/5/2017", 100, 100, 1, 10, 10, 5, 6, 7, 8],
  [0000, "PetName", 1, 0, "12/5/2017", 100, 100, 1, 10, 10, 5, 6, 7, 8],
  [0000, "PetName", 1, 0, "12/5/2017", 100, 100, 1, 10, 10, 5, 6, 7, 8],
	[0000, "PetName", 1, 0, "12/5/2017", 100, 100, 1, 10, 10, 5, 6, 7, 8],
  [0000, "PetName", 1, 0, "12/5/2017", 100, 100, 1, 10, 10, 5, 6, 7, 8]
];


function setCookie(name, value, exdays) {
	var d = new Date();
	var expires = "expires=" + d.toUTCString();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(name) {
	var regexp = new RegExp("(?:^" + name + "|;\s*" + name + ")=(.*?)(?:;|$)", "g");
	var result = regexp.exec(document.cookie);
	return (result === null) ? null : result[1];
}

function tribarMenu() {
	if (document.querySelector("aside").style.display === "none" || document.querySelector("aside").style.display === null) {
		document.querySelector("aside").style.display = "inline-block";
		document.querySelector(".popupFade").style.display = "block";
	} else {
		document.querySelector("aside").style.display = "none";
		document.querySelector(".popupFade").style.display = "none";
	}
}
