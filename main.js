function nav () {
    var a = document.querySelector("#nav .list");

    var link = [["Services",
        ""],
        ["Company",
            ""],
        ["Contact",
            ""],
        ["Get Quote"]];

    for (let i of link) {
        var aa = document.createElement("a");
        aa.href = i[1];
        aa.innerText = i[0];
        a.appendChild(aa);
    }
}

function loc(q) {
    
    var a = document.querySelector("#loc .y");
    var aa = document.querySelector("#loc img");
    
    setTimeout(function() {
        a.style.width = q+"%";
        aa.style.left = q*0.86+"%";
    }, 1000);
}


async function fet(a, b) {

    let data = await fetch("val.php?" + a + "=" + b).then(res => res.text()).then((dat) => {
        return dat;
    });

    return data.trim();
}


async function onb(z, y) {
    var a = document.querySelector("#slid");
    a.style.width = "100%";

    var aa = document.querySelector("#log.log #id");
    aa.value = z;

    var ab = document.querySelector("#log.log #no");
    ab.value = y;

    var b = document.querySelector("#log.log #desc");
    var d = await fet("desc", z);
    b.value = d;
}

function addq(z) {
    var a = document.querySelector("#slidd");
    a.style.width = "100%";

    var ab = document.querySelector("#log.log #noo");
    ab.value = z;
}

function cls() {
    var a = document.querySelector("#slid");
    a.style.width = "0%";
}

function clsa() {
    var a = document.querySelector("#slidd");
    a.style.width = "0%";
}



function bg() {
    var a = document.querySelector("#ser .c");

    var list = [["./img/air.png",
        " Air Freight",
        "This ensure a swift and effective response to unexpected circumstances, minimizing potential harm and maximizing positive outcomes."],
        ["./img/ship.png",
            "Ocean Freight",
            "Customized solutions for your specific ocean freight requirement are at the heart of our services."],
        ["./img/truck.png",
            "Land Express",
            "Our non-asset based Land network provides you with flexibility, improved service and accelerated delivery."]];

    for (let i of list) {
        var b = document.createElement("div");
        var ba = document.createElement("img");
        ba.src = i[0];
        var bb = document.createElement("p");
        bb.innerText = i[1];
        var bc = document.createElement("p");
        bc.innerText = i[2];

        b.appendChild(ba);
        b.appendChild(bb);
        b.appendChild(bc);

        a.appendChild(b);
    }

    var e = document.querySelector("#ser .d");

    var lis = [["./img/world.png",
        "Projects and Fine Art",
        "Individual solutions that always tailored for freight transport projects with special needs."],
        ["./img/pack.png",
            "Warehousing",
            "We offer a state of the art, fully secured warehouse , so that your business is always protected."],
        ["./img/car.png",
            "Custom Breakage",
            "With AEO status, we provides faster processing of customs documents and goods, in priority order."]];

    for (let x of lis) {
        var d = document.createElement("div");
        var da = document.createElement("img");
        da.src = x[0];

        var db = document.createElement("div");
        var dba = document.createElement("div");
        dba.innerText = x[1];

        var dbb = document.createElement("div");
        dbb.innerText = x[2];

        d.appendChild(da);
        d.appendChild(db);
        db.appendChild(dba);
        db.appendChild(dbb);

        e.appendChild(d);
    }
}




function wwa() {
    var e = document.querySelector("#wwa .d");

    var lis = [["./img/spak.png",
        "Safe Packing",
        "International supply chains involves challenging regulations."],
        ["./img/cal.png",
            "In Time Delivery",
            "International supply chains involves challenging regulations."],
        ["./img/loc.png",
            "Ship Everywhere",
            "International supply chains involves challenging regulations."],
        ["./img/plane.png",
            "Fastest Shipping",
            "International supply chains involves challenging regulations."]];

    for (let x of lis) {
        var d = document.createElement("div");
        var da = document.createElement("img");
        da.src = x[0];

        var db = document.createElement("div");
        var dba = document.createElement("div");
        dba.innerText = x[1];

        var dbb = document.createElement("div");
        dbb.innerText = x[2];

        d.appendChild(da);
        d.appendChild(db);
        db.appendChild(dba);
        db.appendChild(dbb);

        e.appendChild(d);
    }
}



function cont() {
    var a = document.querySelector("#cont .f");

    var list = [["map-marker-alt",
        "",
        "United States"],
        ["envelope",
            "mailto:mail@icaruslogistics.org",
            "mail@icaruslogistics.org"],
        ["user",
            "tel:",
            ""]];

    for (let i of list) {
        var b = document.createElement("div");

        var ba = document.createElement("i");
        ba.classList.add("fas", "fa-"+i[0]);

        var bb = document.createElement("a");
        bb.href = i[1];
        bb.innerText = i[2];

        b.appendChild(ba);
        b.appendChild(bb);

        a.appendChild(b);
    }


    var c = document.querySelector("#fot .aa");

    for (let i of list) {
        var d = document.createElement("a");
        d.innerText = i[2];
        d.href = i[1];

        c.appendChild(d);
    }

}
cont();


function fot () {
    var a = document.querySelector("#fot .b");

    var list = [["Services",
        [["Air Freight",
            ""],
            ["Ocean Freight",
                ""],
            ["Railway Freight",
                ""],
            ["Warehousing",
                ""],
            ["Distribution",
                ""]]],
        ["Company",
            [["Mission",
                ""],
                ["Why choose us",
                    ""],
                ["Our Partners",
                    ""],
                ["Contact Us",
                    ""]]],
        ["Industries",
            [["Global Coverage",
                ""],
                ["Freight Recovery",
                    ""],
                ["Supply Chain",
                    ""]]],
        ["Useful Links",
            [["Careers",
                ""],
                ["Cost Calculator",
                    ""],
                ["Location",
                    ""],
                ["FAQs",
                    ""],
                ["Licensing",
                    ""]]]];

    for (let i of list) {
        var b = document.createElement("div");
        var ba = document.createElement("p");
        ba.innerText = i[0];

        b.appendChild(ba);

        for (let v of i[1]) {
            var q = document.createElement("a");
            q.innerText = v[0];
            q.href = v[1];

            b.appendChild(q);
        }

        a.appendChild(b);
    }
}

fot();



function shipd() {
    var a = document.querySelector("#ship .c");
    var b = [["1.",
        "ENTER ORIGIN AND DESTINATION"],
        ["2.",
            "COMPLETE YOUR SHIPMENT DETAILS"],
        ["3.",
            "GET AN ESTIMATED QUOTE"],
        ["4.",
            "PROCEED WITH ONLINE BOOKING"]];

    for (let i of b) {
        var c = document.createElement("div");
        var ca = document.createElement("p");
        ca.innerText = i[0];
        var cb = document.createElement("p");
        cb.innerText = i[1];
        c.appendChild(ca);
        c.appendChild(cb);

        a.appendChild(c);
    }
}



function lst() {
    var a = document.querySelector("#lst");
    var aa = document.querySelector("#lsp");
    var b = ["Afghanistan",
        "Albania",
        "Algeria",
        "Andorra",
        "Angola",
        "Anguilla",
        "Antigua & Barbuda",
        "Argentina",
        "Armenia",
        "Aruba",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahamas",
        "Bahrain",
        "Bangladesh",
        "Barbados",
        "Belarus",
        "Belgium",
        "Belize",
        "Benin",
        "Bermuda",
        "Bhutan",
        "Bolivia",
        "Bosnia &amp; Herzegovina",
        "Botswana",
        "Brazil",
        "British Virgin Islands",
        "Brunei",
        "Bulgaria",
        "Burkina Faso",
        "Burundi",
        "Cambodia",
        "Cameroon",
        "Cape Verde",
        "Cayman Islands",
        "Chad",
        "Chile",
        "China",
        "Colombia",
        "Congo",
        "Cook Islands",
        "Costa Rica",
        "Cote D Ivoire",
        "Croatia",
        "Cruise Ship",
        "Cuba",
        "Cyprus",
        "Czech Republic",
        "Denmark",
        "Djibouti",
        "Dominica",
        "Dominican Republic",
        "Ecuador",
        "Egypt",
        "El Salvador",
        "Equatorial Guinea",
        "Estonia",
        "Ethiopia",
        "Falkland Islands",
        "Faroe Islands",
        "Fiji",
        "Finland",
        "France",
        "French Polynesia",
        "French West Indies",
        "Gabon",
        "Gambia",
        "Georgia",
        "Germany",
        "Ghana",
        "Gibraltar",
        "Greece",
        "Greenland",
        "Grenada",
        "Guam",
        "Guatemala",
        "Guernsey",
        "Guinea",
        "Guinea Bissau",
        "Guyana",
        "Haiti",
        "Honduras",
        "Hong Kong",
        "Hungary",
        "Iceland",
        "India",
        "Indonesia",
        "Iran",
        "Iraq",
        "Ireland",
        "Isle of Man",
        "Israel",
        "Italy",
        "Jamaica",
        "Japan",
        "Jersey",
        "Jordan",
        "Kazakhstan",
        "Kenya",
        "Kuwait",
        "Kyrgyz Republic",
        "Laos",
        "Latvia",
        "Lebanon",
        "Lesotho",
        "Liberia",
        "Libya",
        "Liechtenstein",
        "Lithuania",
        "Luxembourg",
        "Macau",
        "Macedonia",
        "Madagascar",
        "Malawi",
        "Malaysia",
        "Maldives",
        "Mali",
        "Malta",
        "Mauritania",
        "Mauritius",
        "Mexico",
        "Moldova",
        "Monaco",
        "Mongolia",
        "Montenegro",
        "Montserrat",
        "Morocco",
        "Mozambique",
        "Namibia",
        "Nepal",
        "Netherlands",
        "Netherlands Antilles",
        "New Caledonia",
        "New Zealand",
        "Nicaragua",
        "Niger",
        "Nigeria",
        "Norway",
        "Oman",
        "Pakistan",
        "Palestine",
        "Panama",
        "Papua New Guinea",
        "Paraguay",
        "Peru",
        "Philippines",
        "Poland",
        "Portugal",
        "Puerto Rico",
        "Qatar",
        "Reunion",
        "Romania",
        "Russia",
        "Rwanda",
        "Saint Pierre &amp; Miquelon",
        "Samoa",
        "San Marino",
        "Satellite",
        "Saudi Arabia",
        "Senegal",
        "Serbia",
        "Seychelles",
        "Sierra Leone",
        "Singapore",
        "Slovakia",
        "Slovenia",
        "South Africa",
        "South Korea",
        "Spain",
        "Sri Lanka",
        "St Kitts &amp; Nevis",
        "St Lucia",
        "St Vincent",
        "St. Lucia",
        "Sudan",
        "Suriname",
        "Swaziland",
        "Sweden",
        "Switzerland",
        "Syria",
        "Taiwan",
        "Tajikistan",
        "Tanzania",
        "Thailand",
        "Timor L'Este",
        "Togo",
        "Tonga",
        "Trinidad &amp; Tobago",
        "Tunisia",
        "Turkey",
        "Turkmenistan",
        "Turks &amp; Caicos",
        "Uganda",
        "Ukraine",
        "United Arab Emirates",
        "United Kingdom",
        "Uruguay",
        "Uzbekistan",
        "Venezuela",
        "Vietnam",
        "Virgin Islands (US)",
        "Yemen",
        "Zambia",
        "Zimbabwe"];

    for (let i of b) {
        var c = document.createElement("div");
        c.classList.add("coun");
        c.innerText = i;
        c.onclick = function() {
            document.querySelector("#inp1").value = i;
            document.querySelector("#lst").style.display = "none";
            //nati("#lst", "inp1");
        }
        a.appendChild(c);
    }

    for (let i of b) {
        var c = document.createElement("div");
        c.classList.add("coun");
        c.innerText = i;
        c.onclick = function() {
            document.querySelector("#inp2").value = i;
            document.querySelector("#lsp").style.display = "none";
            //nati("#lsp", "#inp2");
        }
        aa.appendChild(c);
    }
}


function nati(y, z) {
    var a = document.querySelectorAll(y+">div");
    var inp = document.querySelector(z).value.toUpperCase();
    for (let i of a) {
        var txt = i.innerText || i.textContent;
        if (txt.toUpperCase().indexOf(inp) > -1) {
            i.style.display = "";
        } else {
            i.style.display = "none";
        }
    }
}


function diss(z, y) {
    var a = document.querySelector(z);
    var b = document.querySelector(y);
    a.style.display = "block";
}



var counter = 0;

function ads() {
    counter++;
    var aq = document.querySelector("#shpp");
    var a = document.createElement("div");
    a.id = "shp";
    aq.appendChild(a);
    var b = document.createElement("p");
    a.appendChild(b);
    b.innerText = "#"+ counter;
    var c = document.createElement("div");
    a.appendChild(c);
    var ca = document.createElement("div");
    c.appendChild(ca);
    var tit = document.createElement("div");
    tit.innerText = "Item Weight";
    tit.classList.add("ti");
    ca.appendChild(tit);
    var cont = document.createElement("div");
    ca.appendChild(cont);
    var conti = document.createElement("div");
    cont.appendChild(conti);
    var contl = document.createElement("label");
    conti.appendChild(contl);
    contl.innerText = "Item Weight (kg)*";
    var contin = document.createElement("input");
    contin.oninput = function() {
        document.querySelector("#wval").innerText = contin.value;
    }
    contin.required = "required";
    conti.appendChild(contin);
    contin.type = "number";
    var arr = [["Length (cm)*",
        "len"],
        ["Width (cm)*",
            "wid"],
        ["Height (cm)*",
            "hei"]];
    var m = document.createElement("div");
    c.appendChild(m);
    var ma = document.createElement("div");
    m.appendChild(ma);
    ma.innerText = "Item Dimensions";
    ma.classList.add("ti");
    var mcont = document.createElement("div");
    mcont.classList.add("itc");
    m.appendChild(mcont);
    for (let i of arr) {
        var n = document.createElement("div");
        mcont.appendChild(n);
        var na = document.createElement("label");
        n.appendChild(na);
        na.innerText = i[0];
        var nb = document.createElement("input");
        nb.required = "required";
        nb.classList.add(i[1]);
        n.appendChild(nb);
        nb.type = "number"
    }
    var cca = document.createElement("div");
    c.appendChild(cca);
    var ctit = document.createElement("div");
    ctit.innerText = "Item Quantity";
    ctit.classList.add("ti");
    cca.appendChild(ctit);
    var ccont = document.createElement("div");
    cca.appendChild(ccont);
    var cconti = document.createElement("div");
    ccont.appendChild(cconti);
    var ccontl = document.createElement("label");
    cconti.appendChild(ccontl);
    ccontl.innerText = "Quantity";
    var ccontin = document.createElement("input");
    cconti.appendChild(ccontin);
    ccontin.type = "number";
    var stack = [["smap",
        "Pallet 1",
        "120 x 80 cm",
        "120",
        "80",
        ""],
        ["bigp",
            "Pallet 2",
            "120 x 100 cm",
            "120",
            "100",
            ""],
        ["box",
            "Moving box",
            "75 x 35 x 35 cm",
            "75",
            "35",
            "35"],
        ["sma",
            "Parcel",
            "35 x 20 x 15 cm",
            "35",
            "20",
            "15"],
        ["env",
            "A4 Envelope",
            "32 x 24 x 1 cm",
            "32",
            "24",
            "1"]];
    var t = document.createElement("div");
    a.appendChild(t);
    t.classList.add("col");
    var ta = document.createElement("div");
    ta.classList.add("ti");
    t.appendChild(ta);
    ta.innerText = "Not sure about sizes?";
    var tc = document.createElement("div");
    tc.classList.add("itmc");
    t.appendChild(tc);
    for (let i of stack) {
        var td = document.createElement("div");
        td.classList.add("itm");
        td.onclick = function() {
            adin(i[3], i[4], i[5]);
        }
        tc.appendChild(td);
        var timg = document.createElement("img");
        td.appendChild(timg);
        timg.src = "img/"+i[0]+".png";
        var taa = document.createElement("div");
        td.appendChild(taa);
        var tab = document.createElement("div");
        taa.appendChild(tab);
        tab.innerText = i[1];
        var tac = document.createElement("div");
        taa.appendChild(tac);
        tac.innerText = i[2];
    }
}


function adin(a, b, c) {
    var d = document.querySelector("#quoo .len");
    var e = document.querySelector("#quoo .wid");
    var f = document.querySelector("#quoo .hei");

    d.value = a;
    e.value = b;
    f.value = c;
}

/*
function sedl(){
    var a = new Date();
    var aa = a.getFullYear();
    var ab = a.getMonth();
    var ac = a.getUTCDate();
    var b = document.querySelector("#day #date");
}
*/


function offer() {
    var a = document.querySelector("#offe .oa");
    var aa = document.querySelector("#offe .ob");

    var b = ["Reliable door-to-door Express parcel & document Delivery of your Time Sensitive Shipment",
        "Track & Trace",
        "Electronic Proof of Delivery in Real Time"];

    var bb = ["Financial Protection of your Shipment value against all risks of physical shipment loss or damage, from any external caauses",
        "Reduce your CO2 emissions by 20%. Choose GoGreen Plus without compromising speed as deliveries remain timely as ever!"];

    var c = document.createElement("ul");
    a.appendChild(c);

    for (let i of b) {
        var e = document.createElement("li");
        e.innerText = i;
        c.appendChild(e);
    }

    var ca = document.createElement("ul");
    aa.appendChild(ca);

    for (let i of bb) {
        var e = document.createElement("li");
        e.innerText = i;
        ca.appendChild(e);
    }


}



function fina() {
    var a = document.querySelector("#quo .fro");

    var arr = [["text",
        "Name",
        "name"],
        ["text",
            "Country/Territory",
            ""],
        ["text",
            "City",
            ""],
        ["text",
            "State",
            "state"],
        ["text",
            "Address",
            "add"],
        ["email",
            "Email Address",
            "mail"],
        ["tel",
            "Phone",
            "phone"]];

    for (let i of arr) {
        var b = document.createElement("div");
        var ba = document.createElement("label");
        ba.innerText = i[1];
        var bb = document.createElement("input");
        bb.type = i[0];
        bb.required = "required";
        bb.name = i[2];
        b.appendChild(ba);
        b.appendChild(bb);

        a.appendChild(b);
    }
}


function finaa() {
    var a = document.querySelector("#quo .to");

    var arr = [["text",
        "Name",
        "name"],
        ["text",
            "Country/Territory",
            ""],
        ["text",
            "City",
            ""],
        ["text",
            "State",
            "state"],
        ["text",
            "Address",
            "add"],
        ["email",
            "Email Address",
            "mail"],
        ["tel",
            "Phone",
            "phone"]];

    for (let i of arr) {
        var b = document.createElement("div");
        var ba = document.createElement("label");
        ba.innerText = i[1];
        var bb = document.createElement("input");
        bb.type = i[0];
        bb.required = "required";
        bb.name = i[2];
        b.appendChild(ba);
        b.appendChild(bb);

        a.appendChild(b);
    }
}


function sub() {
    var tes = 1;
    var a = document.querySelectorAll("#fuba input.pp");
    var aa = document.querySelector("#quoo");
    for (let i of a) {
        var b = i.value;
        if (b.length < 1) {
            tes *= 0;
        }
    }

    if (tes == 1) {
        aa.style.display = "block";
    }
}


function suba() {
    var tes = 1;
    var a = document.querySelectorAll("#fubb #shpp input");
    var aa = document.querySelector("#qt");
    for (let i of a) {
        var b = i.value;
        if (b.length < 1) {
            tes *= 0;
        }
    }

    if (tes == 1) {
        aa.style.display = "block";
        price();
    }
}


function inpshed() {
    var a = document.querySelectorAll("#fuba input.pp");
    var ab = document.querySelector("#quoo");
    var b = document.querySelectorAll("#fubb #shpp input");
    var ba = document.querySelector("#qt");

    for (let i of a) {
        i.onkeydown = function() {
            ab.style.display = "none";
            ba.style.display = "none";
        }
    }

    for (let i of b) {
        i.onkeydown = function() {
            ba.style.display = "none";
        }
    }
}

function price() {
    var b = document.querySelectorAll("#fubb #shpp input");
    var ba = document.querySelector(".rcb .ab");

    var amt = 1;

    for (let o of b) {
        amt *= o.value;
    }

    ba.innerText = Intl.NumberFormat("en-US").format(amt/5000);
}


function subq() {
    var tes = 1;
    var arr = [];
    var a = document.querySelectorAll("#fuba input.pp");
    var ab = document.querySelectorAll("#fubb #shpp input");
    var ac = document.querySelector("#qt input");
    var ad = document.querySelector(".rcb .ab").innerText;

    for (let i of a) {
        var b = i.value;
        if (b.length < 1) {
            tes *= 0;
        }
    }

    for (let i of ab) {
        var b = i.value;
        if (b.length < 1) {
            tes *= 0;
        }
    }

    if (ac.value.length < 1) {
        tes *= 0;
    }

    if (tes == 1) {
        for (let i of a) {
            arr.push(i.value);
        }
        for (let i of ab) {
            arr.push(i.value);
        }
        arr.push(ac.value);
        arr.push(ad);

        var doc = JSON.stringify(arr);

        var newDateObj = new Date();
        var dd = newDateObj.setTime(newDateObj.getTime() + (5 * 60 * 60));

        document.cookie = "arr="+doc+";expires="+dd+"; path=/";

        window.location.assign("form.php");
    }
}


function fsub() {

    var a = document.querySelectorAll("#quo .fro input");
    var b = document.querySelectorAll("#quo .to input");
    var arr = [];
    var tes = 1;
    for (let i of a) {
        var z = i.value;
        if (z.length < 1) {
            tes *= 0;
        }
    }

    for (let i of b) {
        var z = i.value;
        if (z.length < 1) {
            tes *= 0;
        }
    }

    if (tes == 1) {
        for (let i of a) {
            arr.push(i.value);
        }
        for (let i of b) {
            arr.push(i.value);
        }
        var doc = JSON.stringify(arr);

        var newDateObj = new Date();
        var dd = newDateObj.setTime(newDateObj.getTime() + (5 * 60 * 60));

        document.cookie = "ara="+doc+";expires="+dd+"; path=/";
        window.location.assign("email.php");
    }

}