<?php include 'header.php';

if($_SESSION["user"] == null)
{
   header("Location:formulaire_connexion.php");  
}

?>


<head>
    <title>Geoword :worldmap </title>
    <meta name="description" content="map created using amCharts pixel map generator" />



    <!-- amCharts javascript sources -->
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>

    <!-- amCharts javascript code -->
    <script type="text/javascript">
        AmCharts.makeChart("map",{
            "type": "map",
            "pathToImages":"",
            "addClassNames": true,
            "fontSize": 15,
            "color": "#FFFFFF",
            "projection": "mercator",
            "backgroundAlpha": 1,
            "backgroundColor": "rgba(10,120,108,1)",
            "dataProvider": {
                "map": "worldLow",
                "getAreasFromMap": true,
                "images": [
                    {
                        "top": 40,
                        "left": 60,
                        "width": 80,
                        "height": 40,
                        "pixelMapperLogo": true,
                        "imageURL": "",
                        "url": ""
                    }
                ],
                "areas": [
                    {
                        "id": "AE",
                        "title": "United Arab Emirates",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "AF",
                        "title": "Afghanistan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "AL",
                        "title": "Albania",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "AM",
                        "title": "Armenia",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "AO",
                        "title": "Angola",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "AR",
                        "title": "Argentina",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "AT",
                        "title": "Austria",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "AU",
                        "title": "Australia",
                        "color": "rgba(245,13,174,0.94)"
                    },
                    {
                        "id": "AZ",
                        "title": "Azerbaijan",
                        "color": "rgba(112,0,250,0.94)"
                    },
                    {
                        "id": "BA",
                        "title": "Bosnia and Herzegovina",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "BD",
                        "title": "Bangladesh",
                        "color": "rgba(112,0,250,0.94)"
                    },
                    {
                        "id": "BE",
                        "title": "Belgium",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "BF",
                        "title": "Burkina Faso",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "BG",
                        "title": "Bulgaria",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "BI",
                        "title": "Burundi",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "BJ",
                        "title": "Benin",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "BO",
                        "title": "Bolivia",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "BR",
                        "title": "Brazil",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "BT",
                        "title": "Bhutan",
                        "color": "rgba(112,0,250,0.94)"
                    },
                    {
                        "id": "BW",
                        "title": "Botswana",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "BY",
                        "title": "Belarus",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "CA",
                        "title": "Canada",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "CD",
                        "title": "Democratic Republic of Congo",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "CF",
                        "title": "Central African Republic",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "CG",
                        "title": "Republic of Congo",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "CH",
                        "title": "Switzerland",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "CI",
                        "title": "Côte d'Ivoire",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "CL",
                        "title": "Chile",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "CM",
                        "title": "Cameroon",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "CN",
                        "title": "China",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "CO",
                        "title": "Colombia",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "CR",
                        "title": "Costa Rica",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "CU",
                        "title": "Cuba",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "CZ",
                        "title": "Czechia",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "DE",
                        "title": "Germany",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "DK",
                        "title": "Denmark",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "DO",
                        "title": "Dominican Republic",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "DZ",
                        "title": "Algeria",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "EC",
                        "title": "Ecuador",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "EE",
                        "title": "Estonia",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "EG",
                        "title": "Egypt",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "EH",
                        "title": "Western Sahara",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "ER",
                        "title": "Eritrea",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "ES",
                        "title": "Spain",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "ET",
                        "title": "Ethiopia",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "FI",
                        "title": "Finland",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "FJ",
                        "title": "Fiji",
                        "color": "rgba(245,13,174,0.94)"
                    },
                    {
                        "id": "FR",
                        "title": "France",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "GA",
                        "title": "Gabon",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "GB",
                        "title": "United Kingdom",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "GE",
                        "title": "Georgia",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "GF",
                        "title": "French Guiana",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "GH",
                        "title": "Ghana",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "GL",
                        "title": "Greenland",
                        "color": "rgba(240,245,13,0.94)"
                    },
                    {
                        "id": "GN",
                        "title": "Guinea",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "GQ",
                        "title": "Equatorial Guinea",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "GR",
                        "title": "Greece",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "GT",
                        "title": "Guatemala",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "GW",
                        "title": "Guinea-Bissau",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "GY",
                        "title": "Guyana",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "HN",
                        "title": "Honduras",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "HR",
                        "title": "Croatia",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "HU",
                        "title": "Hungary",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "ID",
                        "title": "Indonesia",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "IE",
                        "title": "Ireland",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "IL",
                        "title": "Israel",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "IN",
                        "title": "India",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "IQ",
                        "title": "Iraq",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "IR",
                        "title": "Iran",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "IS",
                        "title": "Iceland",
                        "color": "rgba(145,245,13,0.94)"
                    },
                    {
                        "id": "IT",
                        "title": "Italy",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "JO",
                        "title": "Jordan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "JP",
                        "title": "Japan",
                        "color": "rgba(112,0,250,0.94)"
                    },
                    {
                        "id": "KE",
                        "title": "Kenya",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "KG",
                        "title": "Kyrgyzstan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "KH",
                        "title": "Cambodia",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "KP",
                        "title": "North Korea",
                        "color": "rgba(112,0,250,0.94)"
                    },
                    {
                        "id": "KR",
                        "title": "South Korea",
                        "color": "rgba(112,0,250,0.94)"
                    },
                    {
                        "id": "XK",
                        "title": "Kosovo",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "KZ",
                        "title": "Kazakhstan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "LA",
                        "title": "Lao People's Democratic Republic",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "LK",
                        "title": "Sri Lanka",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "LR",
                        "title": "Liberia",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "LS",
                        "title": "Lesotho",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "LT",
                        "title": "Lithuania",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "LU",
                        "title": "Luxembourg",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "LV",
                        "title": "Latvia",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "LY",
                        "title": "Libya",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "MA",
                        "title": "Morocco",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "MD",
                        "title": "Moldova",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "ME",
                        "title": "Montenegro",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "MG",
                        "title": "Madagascar",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "MK",
                        "title": "Macedonia",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "ML",
                        "title": "Mali",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "MM",
                        "title": "Myanmar",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "MN",
                        "title": "Mongolia",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "MR",
                        "title": "Mauritania",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "MW",
                        "title": "Malawi",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "MX",
                        "title": "Mexico",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "MY",
                        "title": "Malaysia",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "MZ",
                        "title": "Mozambique",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "NA",
                        "title": "Namibia",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "NC",
                        "title": "New Caledonia",
                        "color": "rgba(245,13,174,0.94)"
                    },
                    {
                        "id": "NE",
                        "title": "Niger",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "NG",
                        "title": "Nigeria",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "NI",
                        "title": "Nicaragua",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "NL",
                        "title": "Netherlands",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "NO",
                        "title": "Norway",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "NP",
                        "title": "Nepal",
                        "color": "rgba(112,0,250,0.94)"
                    },
                    {
                        "id": "NZ",
                        "title": "New Zealand",
                        "color": "rgba(245,13,174,0.94)"
                    },
                    {
                        "id": "OM",
                        "title": "Oman",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "PA",
                        "title": "Panama",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "PE",
                        "title": "Peru",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "PG",
                        "title": "Papua New Guinea",
                        "color": "rgba(245,13,174,0.94)"
                    },
                    {
                        "id": "PH",
                        "title": "Philippines",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "PL",
                        "title": "Poland",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "PK",
                        "title": "Pakistan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "PT",
                        "title": "Portugal",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "PY",
                        "title": "Paraguay",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "QA",
                        "title": "Qatar",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "RO",
                        "title": "Romania",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "RS",
                        "title": "Serbia",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "RU",
                        "title": "Russia",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "RW",
                        "title": "Rwanda",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "SA",
                        "title": "Saudi Arabia",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "SD",
                        "title": "Sudan",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "SE",
                        "title": "Sweden",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "SI",
                        "title": "Slovenia",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "SJ",
                        "title": "Svalbard and Jan Mayen",
                        "color": "rgba(145,245,13,0.94)"
                    },
                    {
                        "id": "SK",
                        "title": "Slovakia",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "SL",
                        "title": "Sierra Leone",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "SN",
                        "title": "Senegal",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "SO",
                        "title": "Somalia",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "SR",
                        "title": "Suriname",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "SS",
                        "title": "South Sudan",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "SV",
                        "title": "El Salvador",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "SY",
                        "title": "Syria",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "SZ",
                        "title": "Swaziland",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "TD",
                        "title": "Chad",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "TG",
                        "title": "Togo",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "TH",
                        "title": "Thailand",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "TJ",
                        "title": "Tajikistan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "TM",
                        "title": "Turkmenistan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "TN",
                        "title": "Tunisia",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "TR",
                        "title": "Turkey",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "TW",
                        "title": "Taiwan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "TZ",
                        "title": "Tanzania",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "UA",
                        "title": "Ukraine",
                        "color": "rgba(0,255,0,0.94)"
                    },
                    {
                        "id": "UG",
                        "title": "Uganda",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "US",
                        "title": "United States",
                        "color": "rgba(239,255,0,0.9)"
                    },
                    {
                        "id": "UY",
                        "title": "Uruguay",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "UZ",
                        "title": "Uzbekistan",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "VE",
                        "title": "Venezuela",
                        "color": "rgba(250,195,4,0.94)"
                    },
                    {
                        "id": "VN",
                        "title": "Vietnam",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "YE",
                        "title": "Yemen",
                        "color": "rgba(76,2,231,0.94)"
                    },
                    {
                        "id": "ZA",
                        "title": "South Africa",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "ZM",
                        "title": "Zambia",
                        "color": "rgba(80,0,26,0.94)"
                    },
                    {
                        "id": "ZW",
                        "title": "Zimbabwe",
                        "color": "rgba(80,0,26,0.94)"
                    }
                ],
                "lines": [
                    {
                        // "arc": 0,
                        // "selectable": true,
                        // "color": "rgba(255,73,0,0.94)",
                        // "thickness": 1,
                        // "dashLength": 6.4,
                        // "longitudes": [
                        // 	-124.8058,
                        // 	-192.0108
                        // ],
                        // "latitudes": [
                        // 	33.4001,
                        // 	30.6557
                        // ],
                        // "arrow": "none",
                        // "arrowSize": 6
                    },
                    {
                        // "selectable": true,
                        // "color": "rgba(255,73,0,0.94)",
                        // "longitudes": [
                        // 	-139.7381,
                        // 	-119.2929
                        // ],
                        // "latitudes": [
                        // 	-31.9514,
                        // 	16.2852
                        // ],
                        // "arrow": "none"
                    }
                ]
            },
            "balloon": {
                "horizontalPadding": 15,
                "borderAlpha": 0,
                "borderThickness": 1,
                "verticalPadding": 15
            },
            "areasSettings": {
                "color": "rgba(255,255,255,1)",
                "outlineColor": "rgba(10,120,108,1)",
                "rollOverOutlineColor": "rgba(10,120,108,1)",
                "rollOverBrightness": 20,
                "selectedBrightness": 20,
                "selectable": true,
                "unlistedAreasAlpha": 0,
                "unlistedAreasOutlineAlpha": 0
            },
            "imagesSettings": {
                "alpha": 1,
                "color": "rgba(255,255,255,1)",
                "outlineAlpha": 0,
                "rollOverOutlineAlpha": 0,
                "outlineColor": "rgba(10,120,108,1)",
                "rollOverBrightness": 20,
                "selectedBrightness": 20,
                "selectable": true
            },
            "linesSettings": {
                "color": "rgba(255,255,255,1)",
                "selectable": true,
                "rollOverBrightness": 20,
                "selectedBrightness": 20
            },
            "zoomControl": {
                "zoomControlEnabled": true,
                "homeButtonEnabled": false,
                "panControlEnabled": false,
                "right": 38,
                "bottom": 30,
                "minZoomLevel": 0.25,
                "gridHeight": 100,
                "gridAlpha": 0.1,
                "gridBackgroundAlpha": 0,
                "gridColor": "#FFFFFF",
                "draggerAlpha": 1,
                "buttonCornerRadius": 2
            }
        });
    </script>

</head>
<body style="margin: 0;background-color: rgba(10,120,108,1);">
<div id="map" style="width: 100%; height: 706px;"></div>





<div align="center">
    <h3  style="background-color: white" >Legendre de carte de continents</h3>
    <table class="table">
        <thead class="bgwhite">
        <tr>
            <th scope="col" style="color: yellow">Amerique du Nord</th>
            <th scope="col" style="color: orange">Amerique du Sud</th>
            <th scope="col" style="color: green">Europe</th>
            <th scope="col" style="color: brown">Afrique</th>
            <th scope="col" style="color: rebeccapurple">Asie</th>
            <th scope="col" style="color: deeppink">Oceanie</th>
        </tr>
        </thead>

    </table>
</div>
</body>


