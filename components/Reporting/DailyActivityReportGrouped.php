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
                            <label style="margin-top: 20px; margin-bottom: 20px; margin-left: 6px;">Property Group</label>
                            <select name="value" id="mySelect" style="width: 400px; height: 30px; margin-left: 5px;" onchange="myFunction()">
                                <option value="">Choose</option>
                                <option value="v0">item1</option>
                                <option value="v1">item2</option>
                                <option value="v2">item3</option>
                            </select>
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
                            <label for="">PDF (14 Day Max)</label>
    
                            <input type="radio" id="" name="" value="CSV" style="margin-left: 5px; margin-bottom: 30px; accent-color: gray; ">
                            <label for="">CSV Not Available</label>
                        </div>
    
    
    
    
                        <div style="margin-left: 400px;">
                            <button type="button" style="background-color: #204e89; color: white; font-weight: 500; font-size: 15px; width: 100px; height: 30px; margin-bottom: 20px;">Run Report!</button>
                        </div>
                        <div style="transform: translateY(-500px); float: right; width: 500px; height: 350px; margin-right: 70px;">
                            <div style="margin-left: 90px; margin-top: 5px;">
                                <label for="" style="font-size: 18px; font-weight: 700; margin-top: 12px; margin-bottom: 10px;">DAILY ACTIVITY REPORT GROUPED</label>
                                <p>This report groups Issue Types together alphabetically 
                                    by Property and Level. This report also shows the Acknowledges time, Arrived time and Closed Time for each Issue.
                                    <div>
                                    <label style="color: red; font-weight: 500;font-size: medium; margin-left: 180px;">NOTE: </label>
                                    <p>This Report is limited To a 14 day history per search. If 
                                        you require a report showing a longer history Of created 
                                        issues, you shoild use the Issue, you should use the Issue History report. 
                                    </p>
                                    <label for="">Available in PDF And CSV (Excel)</label>
                                    </div>
                                </p>
                            </div>
                        </div>