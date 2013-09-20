<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1" />
		<title>美团跳转方案</title>
	</head>
	<body>
		<button id="movie">调用电影客户端</button>
		<script>
			document.getElementById("movie").onclick = function(){
				var url = 'http://127.0.0.1:9517/sendintent?';
				//url += 'intent='+encodeURIComponent('meituanmovie://www.meituan.com/movie?id=78068&nm=中国合伙人&lch=baiduplayer')+'&';
				url += 'packagename=com.sankuai.movie&';
				url += 'query=true';
				url = 'http://maoyan.com/734893';
				/*
				xmlHttp=new XMLHttpRequest();
				xmlHttp.onreadystatechange=showResponse;
				xmlHttp.open("GET", url, true);
				xmlHttp.send(null);
				function showResponse(){
					if(xmlHttp.readyState == 4){
						alert(xmlHttp.status);
						alert(xmlHttp.getAllResponseHeaders());
						alert(xmlHttp.responseText);
					}
				}
				*/
				var _doc = document.getElementsByTagName("body")[0];
				var script = document.createElement("script");
				script.setAttribute('type', 'text/javascript');
				script.setAttribute('src', url);
				console.log(script);
				try {
					script.onload = script.onreadystatechange = function(){
						if(!this.readyState||this.readyState=='loaded'||this.readyState=='complete'){  
							alert('安装客户端并且实现跳转');
						}
					}
				}catch(e){
					alert('未安装客户端或未打开客户端');
				}
				_doc.appendChild(script);
			}
		</script>
	</body>
</html>
<?php exit; ?>
<?php
exit;
$wi = array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2);
$y = array(1,0,"X",9,8,7,6,5,4,3,2);
$id = array(4,2,0,1,1,7,1,9,8,6,0,0,0,0,3,1,2);
//$id = array(3,3,0,7,0,2,1,9,8,3,0,0,0,0,6,0,3);
//$id = array(3,6,2,5,0,2,1,9,8,9,0,0,0,0,8,0,1);
//$id = array(3,3,0,1,2,7,1,9,8,4,0,0,0,0,1,8,2);
$yz = 9;
for($j=1; $j<=12; $j++){
	if($j<10){
		$id[10] = 0;
		$id[11] = $j;
	}else{
		$id[10] = floor($j/10);
		$id[11] = $j%10;
	}
	for($i=1; $i<=31; $i++){
		if($i<10){
			$id[12] = 0;
			$id[13] = $i;
		}else{
			$id[12] = floor($i/10);
			$id[13] = $i%10;
		}
		$sum = 0;
		foreach ($id as $k => $v) {
			$sum += $v*$wi[$k];
		}
		$o = $y[$sum%11];
		if($o == $yz){
			echo $id['6'].$id['7'].$id['8'].$id['9']."-".$id['10'].$id['11']."-".$id['12'].$id['13']."<br>";
			//echo implode("", $id).$yz."<br>";
		}
	}
}
 
exit;
?>


<?php
echo date("W");
exit;

echo date("Y-m-d H:i:s", 1342745100)."\n";
echo date("Y-m-d H:i:s", 1342760400)."\n";
echo date("Y-m-d H:i:s", 1342771200)."\n";
echo date("Y-m-d H:i:s", 1342782000)."\n";
echo date("Y-m-d H:i:s", 1342796400)."\n";
echo date("Y-m-d H:i:s", 1342814400)."\n";
echo date("Y-m-d H:i:s", 1343019600)."\n";
/*
http://www.google.com/finance/getprices?q=JPYCNY&x=CURRENCY&i=86400&p=40Y&f=d,c,v,o,h,l&df=cpct&auto=1&ts=213134123
q 相关货币 FormTo
p 时间长度 1M 2M ... 1Y 2Y ...
i 时间间隔 86400秒
f 需要的结果 d=date,c=close,v=volume,o=open,h=high,l=low
*/


function currency($from_Currency,$to_Currency,$amount) {
        $amount = urlencode($amount);
        $from_Currency = urlencode($from_Currency);
        $to_Currency = urlencode($to_Currency);
        $url = "http://www.google.com/ig/calculator?hl=en&q=$amount$from_Currency=?$to_Currency";
        $ch = curl_init();
        $timeout = 0;
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $rawdata = curl_exec($ch);
        curl_close($ch);
        $data = explode('"', $rawdata);
        $data = explode(' ', $data['3']);
        $var = $data['0'];
        return round($var,2);
}
echo currency("JPY","HKD",100);
?>

C0:C1:C0:E8:B5:0B
C0:C1:C0:F6:6F:BE
C0:C1:C0:9F:ED:38



亲爱的同事们：

从下周开始我将不在与你们共事；非常感谢4年半来大家对我的支持和帮助；也非常怀念和大家一起经历的1600个日夜。
不舍离开这个有战斗力、有向心力的团队；以后依然会按时参加组织的活动，圆满完成组织安排的任务。
如果在工作中遇到任何和我相关的问题，随时联系我，我一定会第一时间帮助大家解决问题；如果有重大问题我也和对方公司说好将请假回来协助大家完成。
当然散伙饭是必须的，由于最近真的状况比较多，所以会在不久的将来请大家吃散伙饭。

愿公司越来越好，愿大家越来越好！

洪磊
2013年6月21日





http://www.heavens-above.com
http://www.xzqy.net






EUR - Euro
USD - US Dollar
GBP - British Pound
INR - Indian Rupee
AUD - Australian Dollar
CAD - Canadian Dollar
AED - Emirati Dirham
CHF - Swiss Franc
CNY - Chinese Yuan Renminbi
MYR - Malaysian Ringgit
NZD - New Zealand Dollar
THB - Thai Baht
JPY - Japanese Yen
PHP - Philippine Peso
SGD - Singapore Dollar
SAR - Saudi Arabian Riyal
MXN - Mexican Peso
HKD - Hong Kong Dollar
HUF - Hungarian Forint
SEK - Swedish Krona
TRY - Turkish Lira
ZAR - South African Rand
BRL - Brazilian Real
IDR - Indonesian Rupiah
DKK - Danish Krone
NOK - Norwegian Krone
PKR - Pakistani Rupee
KWD - Kuwaiti Dinar
QAR - Qatari Riyal
OMR - Omani Rial
KRW - South Korean Won
EGP - Egyptian Pound
PLN - Polish Zloty
COP - Colombian Peso
CZK - Czech Koruna
ARS - Argentine Peso
RUB - Russian Ruble
CLP - Chilean Peso
ILS - Israeli Shekel
LKR - Sri Lankan Rupee
MAD - Moroccan Dirham
TWD - Taiwan New Dollar
NGN - Nigerian Naira
BHD - Bahraini Dinar
BDT - Bangladeshi Taka
IQD - Iraqi Dinar
VND - Vietnamese Dong
KES - Kenyan Shilling
HRK - Croatian Kuna
XOF - CFA Franc
JOD - Jordanian Dinar
TND - Tunisian Dinar
BGN - Bulgarian Lev
PEN - Peruvian Nuevo Sol
RON - Romanian New Leu
GHS - Ghanaian Cedi
FJD - Fijian Dollar
XAF - Central African CFA Franc BEAC
ISK - Icelandic Krona
MUR - Mauritian Rupee
DOP - Dominican Peso
NPR - Nepalese Rupee
DZD - Algerian Dinar
UAH - Ukrainian Hryvna
XPF - CFP Franc
JMD - Jamaican Dollar
CRC - Costa Rican Colon
BAM - Bosnian Convertible Marka
IRR - Iranian Rial
LTL - Lithuanian Litas
BND - Bruneian Dollar
RSD - Serbian Dinar
AZN - Azerbaijani New Manat
LVL - Latvian Lat
UGX - Ugandan Shilling
AFN - Afghan Afghani
ZMK - Zambian Kwacha
TZS - Tanzanian Shilling
ETB - Ethiopian Birr
TTD - Trinidadian Dollar
XAU - Gold Ounce
XCD - East Caribbean Dollar
ALL - Albanian Lek
BWP - Botswana Pula
BBD - Barbadian or Bajan Dollar
GEL - Georgian Lari
GTQ - Guatemalan Quetzal
MKD - Macedonian Denar
CUC - Cuban Convertible Peso
LBP - Lebanese Pound
VEF - Venezuelan Bolivar Fuerte
XAG - Silver Ounce
LYD - Libyan Dinar
NAD - Namibian Dollar
BOB - Bolivian Boliviano
KZT - Kazakhstani Tenge
SYP - Syrian Pound
KHR - Cambodian Riel
MOP - Macau Pataca
MZN - Mozambican Metical
AMD - Armenian Dram
LAK - Lao or Laotian Kip
ANG - Dutch Guilder
PGK - Papua New Guinean Kina
ZWD - Zimbabwean Dollar
VUV - Ni-Vanuatu Vatu
MMK - Burmese Kyat
MGA - Malagasy Ariary
AOA - Angolan Kwanza
UYU - Uruguayan Peso
SDG - Sudanese Pound
BYR - Belarusian Ruble
MWK - Malawian Kwacha
HNL - Honduran Lempira
MVR - Maldivian Rufiyaa
KPW - North Korean Won
MNT - Mongolian Tughrik
GMD - Gambian Dalasi
WST - Samoan Tala
RWF - Rwandan Franc
GYD - Guyanese Dollar
AWG - Aruban or Dutch Guilder
KYD - Caymanian Dollar
PYG - Paraguayan Guarani
BZD - Belizean Dollar
SCR - Seychellois Rupee
BSD - Bahamian Dollar
CUP - Cuban Peso
YER - Yemeni Rial
MDL - Moldovan Leu
CDF - Congolese Franc
BTN - Bhutanese Ngultrum
TOP - Tongan Pa'anga
DJF - Djiboutian Franc
NIO - Nicaraguan Cordoba
GNF - Guinean Franc
BMD - Bermudian Dollar
UZS - Uzbekistani Som
HTG - Haitian Gourde
CVE - Cape Verdean Escudo
SLL - Sierra Leonean Leone
SBD - Solomon Islander Dollar
BIF - Burundian Franc
KGS - Kyrgyzstani Som
MRO - Mauritanian Ouguiya
SRD - Surinamese Dollar
PAB - Panamanian Balboa
XDR - IMF Special Drawing Rights
SZL - Swazi Lilangeni
ERN - Eritrean Nakfa
LRD - Liberian Dollar
TJS - Tajikistani Somoni
SOS - Somali Shilling
TMT - Turkmenistani Manat
LSL - Basotho Loti
XPT - Platinum Ounce
GIP - Gibraltar Pound
GGP - Guernsey Pound
FKP - Falkland Island Pound
SVC - Salvadoran Colon
JEP - Jersey Pound
KMF - Comoran Franc
XPD - Palladium Ounce
IMP - Isle of Man Pound
STD - Sao Tomean Dobra
SHP - Saint Helenian Pound
TVD - Tuvaluan Dollar
SPL - Seborgan Luigino