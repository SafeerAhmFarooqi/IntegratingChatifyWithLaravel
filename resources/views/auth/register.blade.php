<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="{{asset('user_frontend/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('user_frontend/css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('user_frontend/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('user_frontend/css/font-awesome.min.css')}}" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="{{asset('user_frontend/image/png')}}" href="{{asset('user_frontend/images/fav.png')}}"/>
<style>
strong{
    color:red;
} </style>	
</head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{asset('user_frontend/images/logo.png')}}" alt="logo" /></a>
          </div>
 
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
  <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Make Cool Friends !!!</h1>
            	<p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
             
              
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Be cool and join today. Meet millions</p>
                  
                  <!--Register Form-->
                  <form name="registration_form" id='registration_form' class="form-inline" action="" method="post" enctype="multipart/form-data" {{-- onsubmit="return confirm('Are You sure you want to register this ');" --}}>
                    @csrf
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">First Name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" value="{{old('firstname')}}" name="firstname" title="Enter first name" placeholder="First name"  />
                        <span>@error('firstname')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                    </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Last Name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" value="{{old('lastname')}}" name="lastname" title="Enter last name" placeholder="Last name"/>
                        <span>@error('lastname')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="text" value="{{old('email')}}" name="email" title="Enter Email" placeholder="Your Email"/>
                        <span>@error('email')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                    </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                        <span>@error('password')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                    </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <input id="password_confirmation" class="form-control input-group-lg" type="password" name="password_confirmation" title="Re Enter Password" placeholder="Confirm Password"/>
                        <span>@error('password_confirmation')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                       <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="day" name="day">
                          <option value="" disabled selected>Day</option>
                          <option value="1">1</option>
                          <option  value="2">2</option>
                          <option  value="3">3</option>
                          <option  value="4">4</option>
                          <option  value="5">5</option>
                          <option  value="6">6</option>
                          <option  value="7">7</option>
                          <option  value="8">8</option>
                          <option  value="9">9</option>
                          <option  value="10">10</option>
                          <option  value="11">11</option>
                          <option  value="12">12</option>
                          <option  value="13">13</option>
                          <option  value="14">14</option>
                          <option  value="15">15</option>
                          <option  value="16">16</option>
                          <option  value="17">17</option>
                          <option  value="18">18</option>
                          <option  value="19">19</option>
                          <option  value="20">20</option>
                          <option  value="21">21</option>
                          <option  value="22">22</option>
                          <option  value="23">23</option>
                          <option  value="24">24</option>
                          <option  value="25">25</option>
                          <option  value="26">26</option>
                          <option  value="27">27</option>
                          <option  value="28">28</option>
                          <option  value="29">29</option>
                          <option  value="30">30</option>
                          <option  value="31">31</option>
                        </select>
                        <span>@error('day')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="month" name="month">
                          <option value="" disabled selected>Month</option>
                          <option value="Jan">Jan</option>
                          <option value="Feb">Feb</option>
                          <option value="Mar">Mar</option>
                          <option value="Apr">Apr</option>
                          <option value="May">May</option>
                          <option value="Jun">Jun</option>
                          <option value="Jul">Jul</option>
                          <option value="Aug">Aug</option>
                          <option value="Sep">Sep</option>
                          <option value="Oct">Oct</option>
                          <option value="Nov">Nov</option>
                          <option value="Dec">Dec</option>
                        </select>
                        <span>@error('month')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year" name="year">
                          <option value="" disabled selected>Year</option> 
                          <option value="1950">1950</option>
                          <option value="1951">1951</option>
                          <option value="1952">1952</option>
                          <option value="1953">1953</option>
                          <option value="1954">1954</option>
                          <option value="1955">1955</option>
                          <option value="1956">1956</option>
                          <option value="1957">1957</option>
                          <option value="1958">1958</option>
                          <option value="1959">1959</option>
                          <option value="1960">1960</option>
                          <option value="1961">1961</option>
                          <option value="1962">1962</option>
                          <option value="1963">1963</option>
                          <option value="1964">1964</option>
                          <option value="1965">1965</option>
                          <option value="1966">1966</option>
                          <option value="1967">1967</option>
                          <option value="1968">1968</option>
                          <option value="1969">1969</option>
                          <option value="1970">1970</option>
                          <option value="1971">1971</option>
                          <option value="1972">1972</option>
                          <option value="1973">1973</option>
                          <option value="1974">1974</option>
                          <option value="1975">1975</option>
                          <option value="1976">1976</option>
                          <option value="1977">1977</option>
                          <option value="1978">1978</option>
                          <option value="1979">1979</option>
                          <option value="1980">1980</option>
                          <option value="1981">1981</option>
                          <option value="1982">1982</option>
                          <option value="1983">1983</option>
                          <option value="1984">1984</option>
                          <option value="1985">1985</option>
                          <option value="1986">1986</option>
                          <option value="1987">1987</option>
                          <option value="1988">1988</option>
                          <option value="1989">1989</option>
                          <option value="1990">1990</option>
                          <option value="1991">1991</option>
                          <option value="1992">1992</option>
                          <option value="1993">1993</option>
                          <option value="1994">1994</option>
                          <option value="1995">1995</option>
                          <option value="1996">1996</option>
                          <option value="1997">1997</option>
                          <option value="1998">1998</option>
                          <option value="1999">1999</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                          <option value="2004">2004</option>
                          <option value="2005">2005</option>
                          <option value="2006">2006</option>
                          <option value="2007">2007</option>
                          <option value="2008">2008</option>
                          <option value="2009">2009</option>
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012</option>
                          <option value="2013">2013</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                        </select>
                        <span>@error('year')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                      </div>
                    </div> 

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="city" class="sr-only">place of residence</label>
                        <input id="city" class="form-control input-group-lg reg_name" type="text" name="residence" value="{{old('residence')}}" title="Enter city" placeholder="place of residence"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city" class="sr-only">City</label>
                        <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" value="{{old('city')}}" title="Enter city" placeholder="Your city"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="country" class="sr-only"></label>
                        <select class="form-control" id="country" name="country">
                          <option value="" disabled selected>Country</option>
                          <option value="AFG">Afghanistan</option>
                          <option value="ALA">Åland Islands</option>
                          <option value="ALB">Albania</option>
                          <option value="DZA">Algeria</option>
                          <option value="ASM">American Samoa</option>
                          <option value="AND">Andorra</option>
                          <option value="AGO">Angola</option>
                          <option value="AIA">Anguilla</option>
                          <option value="ATA">Antarctica</option>
                          <option value="ATG">Antigua and Barbuda</option>
                          <option value="ARG">Argentina</option>
                          <option value="ARM">Armenia</option>
                          <option value="ABW">Aruba</option>
                          <option value="AUS">Australia</option>
                          <option value="AUT">Austria</option>
                          <option value="AZE">Azerbaijan</option>
                          <option value="BHS">Bahamas</option>
                          <option value="BHR">Bahrain</option>
                          <option value="BGD">Bangladesh</option>
                          <option value="BRB">Barbados</option>
                          <option value="BLR">Belarus</option>
                          <option value="BEL">Belgium</option>
                          <option value="BLZ">Belize</option>
                          <option value="BEN">Benin</option>
                          <option value="BMU">Bermuda</option>
                          <option value="BTN">Bhutan</option>
                          <option value="BOL">Bolivia, Plurinational State of</option>
                          <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                          <option value="BIH">Bosnia and Herzegovina</option>
                          <option value="BWA">Botswana</option>
                          <option value="BVT">Bouvet Island</option>
                          <option value="BRA">Brazil</option>
                          <option value="IOT">British Indian Ocean Territory</option>
                          <option value="BRN">Brunei Darussalam</option>
                          <option value="BGR">Bulgaria</option>
                          <option value="BFA">Burkina Faso</option>
                          <option value="BDI">Burundi</option>
                          <option value="KHM">Cambodia</option>
                          <option value="CMR">Cameroon</option>
                          <option value="CAN">Canada</option>
                          <option value="CPV">Cape Verde</option>
                          <option value="CYM">Cayman Islands</option>
                          <option value="CAF">Central African Republic</option>
                          <option value="TCD">Chad</option>
                          <option value="CHL">Chile</option>
                          <option value="CHN">China</option>
                          <option value="CXR">Christmas Island</option>
                          <option value="CCK">Cocos (Keeling) Islands</option>
                          <option value="COL">Colombia</option>
                          <option value="COM">Comoros</option>
                          <option value="COG">Congo</option>
                          <option value="COD">Congo, the Democratic Republic of the</option>
                          <option value="COK">Cook Islands</option>
                          <option value="CRI">Costa Rica</option>
                          <option value="CIV">Côte d'Ivoire</option>
                          <option value="HRV">Croatia</option>
                          <option value="CUB">Cuba</option>
                          <option value="CUW">Curaçao</option>
                          <option value="CYP">Cyprus</option>
                          <option value="CZE">Czech Republic</option>
                          <option value="DNK">Denmark</option>
                          <option value="DJI">Djibouti</option>
                          <option value="DMA">Dominica</option>
                          <option value="DOM">Dominican Republic</option>
                          <option value="ECU">Ecuador</option>
                          <option value="EGY">Egypt</option>
                          <option value="SLV">El Salvador</option>
                          <option value="GNQ">Equatorial Guinea</option>
                          <option value="ERI">Eritrea</option>
                          <option value="EST">Estonia</option>
                          <option value="ETH">Ethiopia</option>
                          <option value="FLK">Falkland Islands (Malvinas)</option>
                          <option value="FRO">Faroe Islands</option>
                          <option value="FJI">Fiji</option>
                          <option value="FIN">Finland</option>
                          <option value="FRA">France</option>
                          <option value="GUF">French Guiana</option>
                          <option value="PYF">French Polynesia</option>
                          <option value="ATF">French Southern Territories</option>
                          <option value="GAB">Gabon</option>
                          <option value="GMB">Gambia</option>
                          <option value="GEO">Georgia</option>
                          <option value="DEU" selected="">Germany</option>
                          <option value="GHA">Ghana</option>
                          <option value="GIB">Gibraltar</option>
                          <option value="GRC">Greece</option>
                          <option value="GRL">Greenland</option>
                          <option value="GRD">Grenada</option>
                          <option value="GLP">Guadeloupe</option>
                          <option value="GUM">Guam</option>
                          <option value="GTM">Guatemala</option>
                          <option value="GGY">Guernsey</option>
                          <option value="GIN">Guinea</option>
                          <option value="GNB">Guinea-Bissau</option>
                          <option value="GUY">Guyana</option>
                          <option value="HTI">Haiti</option>
                          <option value="HMD">Heard Island and McDonald Islands</option>
                          <option value="VAT">Holy See (Vatican City State)</option>
                          <option value="HND">Honduras</option>
                          <option value="HKG">Hong Kong</option>
                          <option value="HUN">Hungary</option>
                          <option value="ISL">Iceland</option>
                          <option value="IND">India</option>
                          <option value="IDN">Indonesia</option>
                          <option value="IRN">Iran, Islamic Republic of</option>
                          <option value="IRQ">Iraq</option>
                          <option value="IRL">Ireland</option>
                          <option value="IMN">Isle of Man</option>
                          <option value="ISR">Israel</option>
                          <option value="ITA">Italy</option>
                          <option value="JAM">Jamaica</option>
                          <option value="JPN">Japan</option>
                          <option value="JEY">Jersey</option>
                          <option value="JOR">Jordan</option>
                          <option value="KAZ">Kazakhstan</option>
                          <option value="KEN">Kenya</option>
                          <option value="KIR">Kiribati</option>
                          <option value="PRK">Korea, Democratic People's Republic of</option>
                          <option value="KOR">Korea, Republic of</option>
                          <option value="KWT">Kuwait</option>
                          <option value="KGZ">Kyrgyzstan</option>
                          <option value="LAO">Lao People's Democratic Republic</option>
                          <option value="LVA">Latvia</option>
                          <option value="LBN">Lebanon</option>
                          <option value="LSO">Lesotho</option>
                          <option value="LBR">Liberia</option>
                          <option value="LBY">Libya</option>
                          <option value="LIE">Liechtenstein</option>
                          <option value="LTU">Lithuania</option>
                          <option value="LUX">Luxembourg</option>
                          <option value="MAC">Macao</option>
                          <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                          <option value="MDG">Madagascar</option>
                          <option value="MWI">Malawi</option>
                          <option value="MYS">Malaysia</option>
                          <option value="MDV">Maldives</option>
                          <option value="MLI">Mali</option>
                          <option value="MLT">Malta</option>
                          <option value="MHL">Marshall Islands</option>
                          <option value="MTQ">Martinique</option>
                          <option value="MRT">Mauritania</option>
                          <option value="MUS">Mauritius</option>
                          <option value="MYT">Mayotte</option>
                          <option value="MEX">Mexico</option>
                          <option value="FSM">Micronesia, Federated States of</option>
                          <option value="MDA">Moldova, Republic of</option>
                          <option value="MCO">Monaco</option>
                          <option value="MNG">Mongolia</option>
                          <option value="MNE">Montenegro</option>
                          <option value="MSR">Montserrat</option>
                          <option value="MAR">Morocco</option>
                          <option value="MOZ">Mozambique</option>
                          <option value="MMR">Myanmar</option>
                          <option value="NAM">Namibia</option>
                          <option value="NRU">Nauru</option>
                          <option value="NPL">Nepal</option>
                          <option value="NLD">Netherlands</option>
                          <option value="NCL">New Caledonia</option>
                          <option value="NZL">New Zealand</option>
                          <option value="NIC">Nicaragua</option>
                          <option value="NER">Niger</option>
                          <option value="NGA">Nigeria</option>
                          <option value="NIU">Niue</option>
                          <option value="NFK">Norfolk Island</option>
                          <option value="MNP">Northern Mariana Islands</option>
                          <option value="NOR">Norway</option>
                          <option value="OMN">Oman</option>
                          <option value="PAK">Pakistan</option>
                          <option value="PLW">Palau</option>
                          <option value="PSE">Palestinian Territory, Occupied</option>
                          <option value="PAN">Panama</option>
                          <option value="PNG">Papua New Guinea</option>
                          <option value="PRY">Paraguay</option>
                          <option value="PER">Peru</option>
                          <option value="PHL">Philippines</option>
                          <option value="PCN">Pitcairn</option>
                          <option value="POL">Poland</option>
                          <option value="PRT">Portugal</option>
                          <option value="PRI">Puerto Rico</option>
                          <option value="QAT">Qatar</option>
                          <option value="REU">Réunion</option>
                          <option value="ROU">Romania</option>
                          <option value="RUS">Russian Federation</option>
                          <option value="RWA">Rwanda</option>
                          <option value="BLM">Saint Barthélemy</option>
                          <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="KNA">Saint Kitts and Nevis</option>
                          <option value="LCA">Saint Lucia</option>
                          <option value="MAF">Saint Martin (French part)</option>
                          <option value="SPM">Saint Pierre and Miquelon</option>
                          <option value="VCT">Saint Vincent and the Grenadines</option>
                          <option value="WSM">Samoa</option>
                          <option value="SMR">San Marino</option>
                          <option value="STP">Sao Tome and Principe</option>
                          <option value="SAU">Saudi Arabia</option>
                          <option value="SEN">Senegal</option>
                          <option value="SRB">Serbia</option>
                          <option value="SYC">Seychelles</option>
                          <option value="SLE">Sierra Leone</option>
                          <option value="SGP">Singapore</option>
                          <option value="SXM">Sint Maarten (Dutch part)</option>
                          <option value="SVK">Slovakia</option>
                          <option value="SVN">Slovenia</option>
                          <option value="SLB">Solomon Islands</option>
                          <option value="SOM">Somalia</option>
                          <option value="ZAF">South Africa</option>
                          <option value="SGS">South Georgia and the South Sandwich Islands</option>
                          <option value="SSD">South Sudan</option>
                          <option value="ESP">Spain</option>
                          <option value="LKA">Sri Lanka</option>
                          <option value="SDN">Sudan</option>
                          <option value="SUR">Suriname</option>
                          <option value="SJM">Svalbard and Jan Mayen</option>
                          <option value="SWZ">Swaziland</option>
                          <option value="SWE">Sweden</option>
                          <option value="CHE">Switzerland</option>
                          <option value="SYR">Syrian Arab Republic</option>
                          <option value="TWN">Taiwan, Province of China</option>
                          <option value="TJK">Tajikistan</option>
                          <option value="TZA">Tanzania, United Republic of</option>
                          <option value="THA">Thailand</option>
                          <option value="TLS">Timor-Leste</option>
                          <option value="TGO">Togo</option>
                          <option value="TKL">Tokelau</option>
                          <option value="TON">Tonga</option>
                          <option value="TTO">Trinidad and Tobago</option>
                          <option value="TUN">Tunisia</option>
                          <option value="TUR">Turkey</option>
                          <option value="TKM">Turkmenistan</option>
                          <option value="TCA">Turks and Caicos Islands</option>
                          <option value="TUV">Tuvalu</option>
                          <option value="UGA">Uganda</option>
                          <option value="UKR">Ukraine</option>
                          <option value="ARE">United Arab Emirates</option>
                          <option value="GBR">United Kingdom</option>
                          <option value="USA">United States</option>
                          <option value="UMI">United States Minor Outlying Islands</option>
                          <option value="URY">Uruguay</option>
                          <option value="UZB">Uzbekistan</option>
                          <option value="VUT">Vanuatu</option>
                          <option value="VEN">Venezuela, Bolivarian Republic of</option>
                          <option value="VNM">Viet Nam</option>
                          <option value="VGB">Virgin Islands, British</option>
                          <option value="VIR">Virgin Islands, U.S.</option>
                          <option value="WLF">Wallis and Futuna</option>
                          <option value="ESH">Western Sahara</option>
                          <option value="YEM">Yemen</option>
                          <option value="ZMB">Zambia</option>
                          <option value="ZWE">Zimbabwe</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">

                      <div class="form-group col-xs-12">
                        <label for="city" class="sr-only">Document For Verification</label>
                        <input  class="form-control input-group-lg reg_name" type="file" name="document"/>
                        <span>@error('document')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                      </div>
                    </div>

                     <div class="row">

                     <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="checkbox" name="category[]"  value="army"> &nbsp; armed forces
                      </label>
                      <label class="radio-inline">
                        <input type="checkbox" name="category[]" value="police">  &nbsp; police
                      </label>
                      <label class="radio-inline">
                        <input type="checkbox" name="category[]" value="fire"> &nbsp; fire  

                      </label>
                      <label class="radio-inline">
                        <input type="checkbox" name="category[]" value="Paramedic" > &nbsp; Paramedic
                      </label>
                      <label class="radio-inline">
                        <input type="checkbox" name="category[]" value="thw" >  &nbsp; THW
                      </label> 
                    </div>
                    </div>
                    <div class="row">
                        <span>@error('category')
                            <div style="color: red">{{ $message }}</div>
                        @enderror</span>
                    </div>


                 <!--Register Now Form Ends-->
                  <p><a href="#" style="color:#D10000">* Document Must Upload For Verification</a></p>
                 <input type="submit" name="register" value="Create New Account" class="btn btn-primary">
              </form>
                </div><!--Registration Form Contents Ends-->
                
            
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    


    <!-- Scripts
    ================================================= -->
    <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('user_frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user_frontend/js/jquery.appear.min.js')}}"></script>
		<script src="{{asset('user_frontend/js/jquery.incremental-counter.js')}}"></script>
    <script src="{{asset('user_frontend/js/script.js')}}"></script>


     <script type="text/javascript">
           $(function() {
           $('.login').click();
        });
      </script>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Password Request</h4>
      </div>
      <div class="modal-body">
        <form name="Login_form" id="Login_form" action="" method="post">
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <p> after reset your password make sure you change your password after login your account..
                        </p>
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="my-email" class="form-control col-sm-6 input-group-lg" type="text" name="email" title="Enter Email" placeholder="Your Email" style="border-radius: 5px;width:50% !important">
                      </div>
                    </div>
                    <div class="row">
                     
                        
                       <input type="submit" name="passwordrequest" value="Login Account" class="btn btn-primary" style="margin:10px;border-radius:5px">

                    </div>
                  </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



	</body>
 
</html>