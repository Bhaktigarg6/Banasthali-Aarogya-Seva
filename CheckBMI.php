<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link rel="stylesheet" href="style_mentalWell.css">
</head>
<body style="margin: auto;">
    <section id="header">
        <a href="#"><img src="images/logo.jpg" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="Student.php">Medical Portal</a></li>
                <li><a href="MentalWellness.php">Mindfullness</a></li>
                <li><a class="active" href="CheckBMI.php">BMI</a></li>
                <!-- <li><a href="Blog.html">Blog</a></li> -->
                <li><a href="personalinformation.php">Profile</a></li>
                <a href="Logout.html"><button class="normal">Logout</button></a>
            </ul>
        </div>
    </section>
<section id="bmi" style="padding: 50px 100px 0px 100px;">
    <!-- information about bmi -->
     <div id="bmiintro">
    <h3>BMI Introduction</h3>
     <p>BMI is a measurement of a person's leanness or corpulence based on their height and weight,
         and is intended to quantify tissue mass. It is widely used as a general indicator of whether a 
         person has a healthy body weight for their height. Specifically, the value obtained from the calculation of
          BMI is used to categorize whether a person is underweight, normal weight, overweight, or obese depending on 
          what range the value falls between. These ranges of BMI vary based on factors such as region and age, and are 
          sometimes further divided into subcategories such as severely underweight or very severely obese. Being overweight 
          or underweight can have significant health effects, so while BMI is an imperfect measure of healthy body weight,
           it is a useful indicator of whether any additional testing or action is required.
         Refer to the table below to see the different categories based on BMI that are used by the calculator.</p>
        </div>

<!-- BMI meter -->

<!-- <div class="leftinput">
    <div id="topmenu" class="topmenucenter"><ul><li><a href="#" onclick="return popMenu('standard',1);">US Units</a></li> <li id="menuon"><a href="#" onclick="return popMenu('metric',1);">Metric Units</a></li> <li><a href="#" onclick="return popMenu('other',0);">Other Units</a></li></ul></div>
    <div class="panel2">
    <table border="0" cellpadding="0" cellspacing="0" align="center"><tbody><tr><td>
    <form name="calform">
    <table id="calinputtable" width="300">
    <tbody><tr>
        <td width="60">Age</td>
        <td width="240"><input type="text" name="cage" id="cage" value="25" class="inhalf" onkeyup="iptfieldCheck(this, 'r', 'pn');"> &nbsp;ages: 2 - 120</td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><label for="csex1" class="cbcontainer"><input type="radio" name="csex" id="csex1" value="m" checked=""><span class="rbmark"></span>Male</label> &nbsp; <label for="csex2" class="cbcontainer"><input type="radio" name="csex" id="csex2" value="f"><span class="rbmark"></span>Female</label></td>
    </tr>
    </tbody></table>
    <table width="300" id="standardheightweight" bgcolor="#eeeeee" style="display: none;">
    <tbody><tr>
        <td width="60">Height</td>
        <td width="240">
            <table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td>
                <input type="text" name="cheightfeet" id="cheightfeet" value="5" class="inhalf inuifoot" onkeyup="iptfieldCheck(this, '', 'pzn');"><span class="inuifootspan">feet</span>
            </td><td>&nbsp;&nbsp;</td><td>
                <input type="text" name="cheightinch" id="cheightinch" value="10" class="inhalf inuiinch" onkeyup="iptfieldCheck(this, '', 'pzn');"><span class="inuiinchspan">inches</span>
            </td></tr></tbody></table>
        </td>
    </tr>
    <tr>
        <td>Weight</td>
        <td><input type="text" name="cpound" id="cpound" value="160" class="infull inuipound" onkeyup="iptfieldCheck(this, 'r', 'pn');"><span class="inuipoundspan">pounds</span></td>
    </tr>
    </tbody></table>
    <table width="300" id="metricheightweight" bgcolor="#eeeeee" style="display: block;">
    <tbody><tr>
        <td width="60">Height</td>
        <td width="240"><input type="text" name="cheightmeter" id="cheightmeter" value="180" class="infull inuick" onkeyup="iptfieldCheck(this, 'r', 'pn');"><span class="inuickspan">cm</span></td>
    </tr>
    <tr id="metricweight">
        <td>Weight</td>
        <td><input type="text" name="ckg" id="ckg" value="65" class="infull inuick" onkeyup="iptfieldCheck(this, 'r', 'pn');"><span class="inuickspan">kg</span></td>
    </tr>
    </tbody></table>
    <table width="264">
    <tbody><tr>
        <td colspan="2" align="right" style="padding-top:8px;">
            <input name="printit" value="0" type="hidden">
            <input type="hidden" name="ctype" id="ctype" value="metric">
            <input type="submit" name="x" value="Calculate">
            <input type="button" value="Clear" onclick="clearForm(document.calform);">
        </td>
    </tr>
    </tbody></table></form>
    </td></tr></tbody></table>
    
    </div>
    </div>
    <div class="rightresult">
        <h2 class="h2result">Result<img src="//d26tpo4cm8sb6k.cloudfront.net/img/save.svg" width="19" height="20" title="Save this calculation" style="float:right;padding-top:3px;cursor: pointer;" onclick="saveCalResult('Qk1JIENhbGN1bGF0b3I=', 0, 'Qk1JIENhbGN1bGF0b3I=', 'Qk1J', 'MjAuMQ==');"></h2>
        <div class="bigtext" style="margin-top:5px;"><b>BMI = 20.1 kg/m<sup>2</sup></b> &nbsp; (<font color="green"><b>Normal</b></font>)</div><div style="padding-top:10px;text-align:center;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300px" height="163px" viewBox="0 0 300 163">
            <g transform="translate(18,18)" style="font-family:arial,helvetica,sans-serif;font-size: 12px;"><defs><marker id="arrowhead" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto"><polygon points="0 0, 10 3.5, 0 7"></polygon></marker><path id="curvetxt1" d="M-4 140 A140 140, 0, 0, 1, 284 140" style="fill: none;"></path><path id="curvetxt2" d="M33 43.6 A140 140, 0, 0, 1, 280 140" style="fill: #fff">

        </path><path id="curvetxt3" d="M95 3 A140 140, 0, 0, 1, 284 140" style="fill: #fff">

        </path><path id="curvetxt4" d="M235.4 33 A140 140, 0, 0, 1, 284 140" style="fill: #fff">

        </path></defs><path d="M0 140 A140 140, 0, 0, 1, 6.9 96.7 L140 140 Z" fill="#bc2020">

        </path><path d="M6.9 96.7 A140 140, 0, 0, 1, 12.1 83.1 L140 140 Z" fill="#d38888">

        </path><path d="M12.1 83.1 A140 140, 0, 0, 1, 22.6 63.8 L140 140 Z" fill="#ffe400">

        </path><path d="M22.6 63.8 A140 140, 0, 0, 1, 96.7 6.9 L140 140 Z" fill="#008137">

        </path><path d="M96.7 6.9 A140 140, 0, 0, 1, 169.1 3.1 L140 140 Z" fill="#ffe400">

        </path><path d="M169.1 3.1 A140 140, 0, 0, 1, 233.7 36 L140 140 Z" fill="#d38888">

        </path><path d="M233.7 36 A140 140, 0, 0, 1, 273.1 96.7 L140 140 Z" fill="#bc2020">

        </path><path d="M273.1 96.7 A140 140, 0, 0, 1, 280 140 L140 140 Z" fill="#8a0101">

        </path><path d="M45 140 A90 90, 0, 0, 1, 230 140 Z" fill="#fff"></path>
        <circle cx="140" cy="140" r="5" fill="#666"></circle><g style="paint-order: stroke;stroke: #fff;stroke-width: 2px;"><text x="25" y="111" transform="rotate(-72, 25, 111)">16</text><text x="30" y="96" transform="rotate(-66, 30, 96)">17</text><text x="35" y="83" transform="rotate(-57, 35, 83)">18.5</text><text x="97" y="29" transform="rotate(-18, 97, 29)">25</text><text x="157" y="20" transform="rotate(12, 157, 20)">30</text><text x="214" y="45" transform="rotate(42, 214, 45)">35</text><text x="252" y="95" transform="rotate(72, 252, 95)">40</text></g><g style="font-size: 14px;"><text><textPath xlink:href="#curvetxt1">Underweight</textPath></text><text><textPath xlink:href="#curvetxt2">Normal</textPath></text><text><textPath xlink:href="#curvetxt3">Overweight</textPath></text><text><textPath xlink:href="#curvetxt4">Obesity</textPath></text></g><line x1="140" y1="140" x2="65" y2="140" stroke="#666" stroke-width="2" marker-end="url(#arrowhead)">
            <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0 140 140" to="42.6 140 140" dur="1s" fill="freeze" repeatCount="1"></animateTransform></line><text x="67" y="120" style="font-size: 30px;font-weight:bold;color:#000;">BMI = 20.1</text></g></svg></div><ul style="margin-left:8px;padding-left:8px;"><li>Healthy BMI range: 18.5 kg/m<sup>2</sup> - 25 kg/m<sup>2</sup></li><li>Healthy weight for the height: 59.9 kg - 81 kg</li><li>BMI Prime: 0.8</li><li>Ponderal Index: 11.1 kg/m<sup>3</sup></li></ul>
    </div>
 -->
 <div class="BMIcontainer">
    <h2>BMI Calculator</h2>
    <div class="tabs">
        <div class="tab active-tab">Metric Units</div>
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" id="age" placeholder="Enter age" min="2" max="120">
    </div>
    <div class="form-group">
        <!-- <label>Gender</label> -->
        <div>
            <input type="radio" id="male" name="gender" value="Male" checked> Male
            <input type="radio" id="female" name="gender" value="Female"> Female
        </div>
    </div>
    <div class="form-group">
        <label>Height (cm)</label>
        <input type="number" id="height" placeholder="Enter height in cm">
    </div>
    <div class="form-group">
        <label>Weight (kg)</label>
        <input type="number" id="weight" placeholder="Enter weight in kg">
    </div>
    <button class="btn" onclick="calculateBMI()">Calculate</button>
    <button class="btn btn-clear" onclick="clearFields()">Clear</button>

    <div class="result" id="result" style="display: none;">
        <p class="bmi-value">BMI = <span id="bmi"></span> kg/m² (<span id="category"></span>)</p>
        <div class="gauge">
            <div class="pointer" id="pointer"></div>
        </div>
        <ul>
            <li>Healthy BMI range: 18.5 - 25 kg/m²</li>
            <li>Healthy weight range: <span id="healthy-weight"></span> kg</li>
            <li>BMI Prime: <span id="bmi-prime"></span></li>
            <li>Ponderal Index: <span id="ponderal-index"></span> kg/m³</li>
        </ul>
    </div>
</div>
<div class="rightresult">
    <h2 class="h2result">Result<img src="//d26tpo4cm8sb6k.cloudfront.net/img/save.svg" width="19" height="20" title="Save this calculation" style="float:right;padding-top:3px;cursor: pointer;" onclick="saveCalResult('Qk1JIENhbGN1bGF0b3I=', 0, 'Qk1JIENhbGN1bGF0b3I=', 'Qk1J', 'MjAuMQ==');"></h2>
    <div class="bigtext" style="margin-top:5px;"><b>BMI = 20.1 kg/m<sup>2</sup></b> &nbsp; (<font color="green"><b>Normal</b></font>)</div><div style="padding-top:10px;text-align:center;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300px" height="163px" viewBox="0 0 300 163">
        <g transform="translate(18,18)" style="font-family:arial,helvetica,sans-serif;font-size: 12px;"><defs><marker id="arrowhead" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto"><polygon points="0 0, 10 3.5, 0 7"></polygon></marker><path id="curvetxt1" d="M-4 140 A140 140, 0, 0, 1, 284 140" style="fill: none;"></path><path id="curvetxt2" d="M33 43.6 A140 140, 0, 0, 1, 280 140" style="fill: #fff">

    </path><path id="curvetxt3" d="M95 3 A140 140, 0, 0, 1, 284 140" style="fill: #fff">

    </path><path id="curvetxt4" d="M235.4 33 A140 140, 0, 0, 1, 284 140" style="fill: #fff">

    </path></defs><path d="M0 140 A140 140, 0, 0, 1, 6.9 96.7 L140 140 Z" fill="#bc2020">

    </path><path d="M6.9 96.7 A140 140, 0, 0, 1, 12.1 83.1 L140 140 Z" fill="#d38888">

    </path><path d="M12.1 83.1 A140 140, 0, 0, 1, 22.6 63.8 L140 140 Z" fill="#ffe400">

    </path><path d="M22.6 63.8 A140 140, 0, 0, 1, 96.7 6.9 L140 140 Z" fill="#008137">

    </path><path d="M96.7 6.9 A140 140, 0, 0, 1, 169.1 3.1 L140 140 Z" fill="#ffe400">

    </path><path d="M169.1 3.1 A140 140, 0, 0, 1, 233.7 36 L140 140 Z" fill="#d38888">

    </path><path d="M233.7 36 A140 140, 0, 0, 1, 273.1 96.7 L140 140 Z" fill="#bc2020">

    </path><path d="M273.1 96.7 A140 140, 0, 0, 1, 280 140 L140 140 Z" fill="#8a0101">

    </path><path d="M45 140 A90 90, 0, 0, 1, 230 140 Z" fill="#fff"></path>
    <circle cx="140" cy="140" r="5" fill="#666"></circle><g style="paint-order: stroke;stroke: #fff;stroke-width: 2px;"><text x="25" y="111" transform="rotate(-72, 25, 111)">16</text><text x="30" y="96" transform="rotate(-66, 30, 96)">17</text><text x="35" y="83" transform="rotate(-57, 35, 83)">18.5</text><text x="97" y="29" transform="rotate(-18, 97, 29)">25</text><text x="157" y="20" transform="rotate(12, 157, 20)">30</text><text x="214" y="45" transform="rotate(42, 214, 45)">35</text><text x="252" y="95" transform="rotate(72, 252, 95)">40</text></g><g style="font-size: 14px;"><text><textPath xlink:href="#curvetxt1">Underweight</textPath></text><text><textPath xlink:href="#curvetxt2">Normal</textPath></text><text><textPath xlink:href="#curvetxt3">Overweight</textPath></text><text><textPath xlink:href="#curvetxt4">Obesity</textPath></text></g><line x1="140" y1="140" x2="65" y2="140" stroke="#666" stroke-width="2" marker-end="url(#arrowhead)">
        <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0 140 140" to="42.6 140 140" dur="1s" fill="freeze" repeatCount="1"></animateTransform></line><text x="67" y="120" style="font-size: 30px;font-weight:bold;color:#000;">BMI = 20.1</text></g></svg></div><ul style="margin-left:8px;padding-left:8px;"><li>Healthy BMI range: 18.5 kg/m<sup>2</sup> - 25 kg/m<sup>2</sup></li><li>Healthy weight for the height: 59.9 kg - 81 kg</li><li>BMI Prime: 0.8</li><li>Ponderal Index: 11.1 kg/m<sup>3</sup></li></ul>
</div>



<!-- BMI meter ends -->
        <h3>BMI table for adults</h3>
        <p>This is the World Health Organization's (WHO) recommended body weight based on BMI values for adults. It is used for both men and women, age 20 or older.</p>
        <table class="cinfoT" align="center">
            <tbody><tr><td class="cinfoHd">Classification</td><td class="cinfoHdL">BMI range - kg/m<sup>2</sup></td></tr>
            <tr><td>Severe Thinness</td><td align="center">&lt; 16</td></tr>
            <tr><td>Moderate Thinness</td><td align="center">16 - 17</td></tr>
            <tr><td>Mild Thinness</td><td align="center">17 - 18.5</td></tr>
            <tr><td>Normal</td><td align="center">18.5 - 25</td></tr>
            <tr><td>Overweight</td><td align="center">25 - 30</td></tr>
            <tr><td>Obese Class I</td><td align="center">30 - 35</td></tr>
            <tr><td>Obese Class II</td><td align="center">35 - 40</td></tr>
            <tr><td>Obese Class III</td><td align="center">&gt; 40</td></tr>
        </tbody></table>
        <h3>BMI chart for adults</h3>
        <p>This is a graph of BMI categories based on the World Health Organization data. The dashed lines represent subdivisions within a major categorization.</p>
        <p style="text-align:center;"><img src="//d26tpo4cm8sb6k.cloudfront.net/img/bmi-chart.gif" width="529" height="441" class="scaleimg" alt="BMI categories"></p>

        <h3>Risks associated with being overweight</h3>
        <p>Being overweight increases the risk of a number of serious diseases and health conditions. Below is a list of said risks, according to the Centers for Disease Control and Prevention (CDC):</p>
        <ul>
            <li>High blood pressure</li>
            <li>Higher levels of LDL cholesterol, which is widely considered "bad cholesterol," lower levels of HDL cholesterol, considered to be good cholesterol in moderation, and high levels of triglycerides</li>
            <li>Type II diabetes</li>
            <li>Coronary heart disease</li>
            <li>Stroke</li>
            <li>Gallbladder disease</li>
            <li>Osteoarthritis, a type of joint disease caused by breakdown of joint cartilage</li>
            <li>Sleep apnea and breathing problems</li>
            <li>Certain cancers (endometrial, breast, colon, kidney, gallbladder, liver)</li>
            <li>Low quality of life</li>
            <li>Mental illnesses such as clinical depression, anxiety, and others</li>
            <li>Body pains and difficulty with certain physical functions</li>
            <li>Generally, an increased risk of mortality compared to those with a healthy BMI</li>
        </ul>
        <p class="">As can be seen from the list above, there are numerous negative, in some cases fatal, outcomes that may result from being overweight. Generally, a person should try to maintain a BMI below 25 kg/m<sup>2</sup>, but ideally should consult their doctor to determine whether or not they need to make any changes to their lifestyle in order to be healthier.</p>
        <h3>Risks associated with being underweight</h3>
        <p>Being underweight has its own associated risks, listed below:</p>
        <ul>
            <li>Malnutrition, vitamin deficiencies, anemia (lowered ability to carry blood vessels)</li>
            <li>Osteoporosis, a disease that causes bone weakness, increasing the risk of breaking a bone</li>
            <li>A decrease in immune function</li>
            <li>Growth and development issues, particularly in children and teenagers</li>
            <li>Possible reproductive issues for women due to hormonal imbalances that can disrupt the menstrual cycle. Underweight women also have a higher chance of miscarriage in the first trimester</li>
            <li>Potential complications as a result of surgery</li>
            <li>Generally, an increased risk of mortality compared to those with a healthy BMI</li>
        </ul>
        <p>In some cases, being underweight can be a sign of some underlying condition or disease such as anorexia nervosa, which has its own risks. Consult your doctor if you think you or someone you know is underweight, particularly if the reason for being underweight does not seem obvious.</p>
        <h3>Limitations of BMI</h3>
        <p>Although BMI is a widely used and useful indicator of healthy body weight, it does have its limitations. BMI is only an estimate that cannot take body composition into account. Due to a wide variety of body types as well as distribution of muscle, bone mass, and fat, BMI should be considered along with other measurements rather than being used as the sole method for determining a person's healthy body weight.</p>
        <p><b>In adults:</b></p>
        <p>BMI cannot be fully accurate because it is a measure of excess body weight, rather than excess body fat. BMI is further influenced by factors such as age, sex, ethnicity, muscle mass, body fat, and activity level, among others. For example, an older person who is considered a healthy weight, but is completely inactive in their daily life may have significant amounts of excess body fat even though they are not heavy. This would be considered unhealthy, while a younger person with higher muscle composition of the same BMI would be considered healthy. In athletes, particularly bodybuilders who would be considered overweight due to muscle being heavier than fat, it is entirely possible that they are actually at a healthy weight for their body composition. Generally, according to the CDC:</p>
        <ul>
            <li>Older adults tend to have more body fat than younger adults with the same BMI.</li>
            <li>Women tend to have more body fat than men for an equivalent BMI.</li>
            <li>Muscular individuals and highly trained athletes may have higher BMIs due to large muscle mass.</li>
        </ul>
        <p><b>In children and adolescents:</b></p>
        <p>The same factors that limit the efficacy of BMI for adults can also apply to children and adolescents. Additionally, height and level of sexual maturation can influence BMI and body fat among children. BMI is a better indicator of excess body fat for obese children than it is for overweight children, whose BMI could be a result of increased levels of either fat or fat-free mass (all body components except for fat, which includes water, organs, muscle, etc.). In thin children, the difference in BMI can also be due to fat-free mass.</p>
        <p>That being said, BMI is fairly indicative of body fat for 90-95% of the population, and can effectively be used along with other measures to help determine an individual's healthy body weight.</p>
        <h3>BMI formula</h3>
        <p>Below are the equations used for calculating BMI in the International System of Units (SI) and the US customary system (USC) using a 5'10", 160-pound individual as an example:</p>
        <table align="center">
            <tbody><tr><td style="padding-top:5px;"><b>USC Units:</b></td></tr>
            <tr><td style="padding-left: 15px;">
                <table cellspacing="0" cellpadding="0"><tbody><tr>
                <td>BMI = 703×</td>
                <td><table cellspacing="0" cellpadding="0"><tbody><tr><td>mass (lbs)</td></tr><tr><td bgcolor="#000000" height="1"></td></tr><tr><td>height<sup>2</sup> (in)</td></tr></tbody></table></td>
                <td>&nbsp;= 703×</td>
                <td><table cellspacing="0" cellpadding="0"><tbody><tr><td>160</td></tr><tr><td bgcolor="#000000" height="1"></td></tr><tr><td>70<sup>2</sup></td></tr></tbody></table></td>
                <td>&nbsp;= 23.0</td>
                </tr></tbody></table>
            </td></tr>
            <tr><td style="padding-top:15px;"><b>SI, Metric Units:</b></td></tr>
            <tr><td style="padding-left: 15px;">
                <table cellspacing="0" cellpadding="0"><tbody><tr>
                <td>BMI =&nbsp;</td>
                <td><table cellspacing="0" cellpadding="0"><tbody><tr><td>mass (kg)</td></tr><tr><td bgcolor="#000000" height="1"></td></tr><tr><td>height<sup>2</sup> (m)</td></tr></tbody></table></td>
                <td>&nbsp;=&nbsp;</td>
                <td><table cellspacing="0" cellpadding="0"><tbody><tr><td>72.57</td></tr><tr><td bgcolor="#000000" height="1"></td></tr><tr><td>1.778<sup>2</sup></td></tr></tbody></table></td>
                <td>&nbsp;= 23.0</td>
                </tr></tbody></table>
            </td></tr>
        </tbody></table>

    </section>
    <script src="devanshi.js"></script>
</body>
</html>