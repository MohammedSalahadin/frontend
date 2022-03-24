<div style="padding-left: -40px; margin-top: 20px;">
                                <label for="">Start Date Range</label>
                                <input type="text" placeholder=" Start Date" style="width: 400px; height: 30px; margin-left: 2px;">
                            </div>
                            <div style="padding-left: 2px; margin-top: 20px;">
                                <label for="">End Date Range</label>
                                <input type="text" placeholder=" End Date" style="width: 400px; height: 30px; margin-left: 7px;">
                            </div>
        
        
                            <label for="" style="transform: translateY(+50px)">Choose Property</label>
        
                            <div style="margin-left: 110px;">
                        <div style="margin-left: -18px;">
                            <select id="cars" name="cars" size="4" multiple style="width: 400px; height: 95px; margin-left: 18px;">
                                <option value=""> Alpha Patrol</option>
                                <option value=""> Article Building</option>
                                <option value=""> Artivion</option>
                                <option value=""> Austin American Statesman</option>
                                <option value=""> Ben White Bingo</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
    
                            <div class="d1">
                                <label style="margin-top: 20px; margin-bottom: 10px; margin-left: 6px;">Property Group</label>
                                <select name="value" id="mySelect" style="width: 400px; height: 30px; margin-left: 5px;" onchange="myFunction()">
                                    <option value="">Choose</option>
                                    <option value="v0">item1</option>
                                    <option value="v1">item2</option>
                                    <option value="v2">item3</option>
                                </select>
                            </div>

                            <div style="padding-left: 35px; margin-top: 10px;">
                                <label for="">User Name</label>
                                <input type="text" placeholder="" style="width: 200px; height: 30px; margin-left: 5px;">
                                <button type="button" style="background-color: #204e89; color: white; font-weight: 500; font-size: 15px; width: 30px; height: 30px; ">X</button>
                                <button type="button" id="" style="background-color: #204e89; color: white; font-weight: 500; font-size: 15px; width: 100px; height: 30px; ">Choose</button>
                            </div>
                            
                            <div style="margin-top: 20px; margin-left: -20px;">
                                <label for="">Include Issue Levels</label>
                                <input type="checkbox" id="" name="" value=" " style="margin-left: 5px; margin-bottom: 40px; ">
                                <label for="">Level 1</label>
        
                                <input type="checkbox" id="" name="" value="" style="margin-left: 5px; margin-bottom: 30px; ">
                                <label for="">Level 2</label>
        
                                <input type="checkbox" id="" name="" value="" style="margin-left: 5px; margin-bottom: 30px;">
                                <label for="">Level 3</label>
                            </div>
        
                            <div style="margin-top: -20px; margin-left: -18px;">
                                <label for="">Include Issue Types</label>
                                <input type="checkbox" id="" name="" value=" " style="margin-left: 5px; margin-bottom: 40px">
                                <label for="">Security</label>
        
                                <input type="checkbox" id="" name="" value="" style="margin-left: 5px; margin-bottom: 30px;">
                                <label for="">Parking</label>
        
                                <input type="checkbox" id="" name="" value="" style="margin-left: 5px; margin-bottom: 30px;">
                                <label for="">Maintenance</label>
                            </div>

                            <div style="margin-top: -20px; margin-left: -43px;">
                                <label for="">Only show Checkpoints</label>
                                <input type="checkbox" id="" name="" value=" " style="margin-left: 5px; margin-bottom: 40px;">
                            </div>
        
        
                            <div style="margin-top: -20px; margin-left: 16px;">
                                <label for="">Urgent Issues</label>
                                <input type="radio" id="" name="" value=" " style="margin-left: 5px; margin-bottom: 40px;">
                                <label for="">Both</label>
        
                                <input type="radio" id="" name="" value="" style="margin-left: 5px; margin-bottom: 30px;">
                                <label for="">Non Urgent</label>
        
                                <input type="radio" id="" name="" value="" style="margin-left: 5px; margin-bottom: 30px;">
                                <label for="">Urgent</label>
                            </div>
        
                            <div style="margin-top: -20px; margin-left: 25px;">
                                <label for="">Report Type</label>
                                <input type="radio" id="" name="" value="PDF_72_Hours " style="margin-left: 5px; margin-bottom: 40px; accent-color: gray;">
                                <label for="">PDF Not Available</label>
        
                                <input type="radio" id="" name="" value="CSV" style="margin-left: 5px; margin-bottom: 30px; accent-color: gray; ">
                                <label for="">CSV (Excel)</label>
                            </div>
        
        
        
        
                            <div style="margin-left: 400px;">
                                <button type="button" style="background-color: #204e89; color: white; font-weight: 500; font-size: 15px; width: 100px; height: 30px; margin-bottom: 20px;">Run Report!</button>
                            </div>


                            <div style="transform: translateY(-600px); float: right; width: 500px; height: 350px; margin-right: 70px;">
                                <div style="margin-left: 90px; margin-top: 5px;">
                                    <label for="" style="font-size: 18px; font-weight: 700; margin-top: 12px; margin-bottom: 10px;">Issue History (With Notes)</label>
                                    <p>This report is similar to Daily Activity report with a few 
                                        exceptions:
                                        <div>
                                            <ul>
                                                <li>Only available in CVS (Excel) Format</li>
                                                <li>Enables a search by a specific Username</li>
                                                <li>This report has the following individual search</li>
                                                <label>options</label>
                                                <li>Choose: Levels 1,2,3 or ALL</li>
                                                <li>Choose: Security, Parking, Maintenance or ALL</li>
                                                <li>Choose: To Include Urgent or Non-Urgent Issues</li>
                                                <label>or Both</label>
                                                <li>Choose: Property Group name search(Optional </li>
                                                <label>to narrow down search criteria)</label>
                                              </ul>
                                        </div>
                                        <div>
                                        <label style="color: red; font-weight: 500;font-size: medium; margin-left: 180px;">NOTE: </label>
                                        <p>Depending on the timeline chosen, this report will be 
                                            limited to a maximum amount of issues per report. If you encounter a report that does not include ALL of your
                                            data search perameters, you will have to run another
                                            report and shorten the data perameters. Available in CSV (Excel) Format ONLY.  
                                        </p>
                                        <label style="color: red; font-weight: 400;font-size: medium; ">Maximum Issues for this Report is 20,000 </label>
                                        </div>
                                    </p>
                                </div>
                            </div>