<form action="">
    <div class="box" style="background-color: #eeeeee">
            <div class="d1" style="padding-left: 20px; ">
                <label style="margin-top: 20px; margin-bottom: 20px; margin-left: 60px; ">Choose Report </label>
                <select name="value" id="mySelect" style="width: 400px; height: 30px; margin-left: 5px;" onchange="myFunction()">
                    <option value="">Choose Report</option>
                    <option value="v0">All Properties List</option>
                    <option value="v1">Checkpoints Report</option>
                    <option value="v2">Checkpoints Summary Report</option>
                    <option value="v3">Checkpoints Timeline Report</option>
                    <option value="v4">Daily Activity Report</option>
                    <option value="v5">Daily Activity Report (Compact)</option>
                    <option value="v6">Daily Activity Report (Grouped)</option>
                    <option value="v7">Issue History (With Notes)</option>
                    <option value="v8">Issue History (Without Notes)</option>
                    <option value="v9">Issue Summary Report</option>
                    <option value="v10">Issue Summary Report Top 10</option>
                    <option value="v11">Login History Of Customers</option>
                    <option value="v12">Login History Of Employees</option>
                    <option value="v13">New issue Timeslice</option>
                    <option value="v14">Property Profile</option>
                    <option value="v15">Property Tasks Report</option>
                    <option value="v16">Registered Devices</option>
                    <option value="v17">Resident List</option>
                    <option value="v18">User Notifications</option>
                </select>
            </div>
            <div>
                
                <!-- All Properties List -->
                <div style="margin-left: 60px;">
                <div id="v1" style="display:none; padding-left: 40px;">
                    <?php
                    require('../components/Reporting/AllPropertiesList.php')
                    ?>
                </div>
                </div>

                <!-- Checkpoints Report -->
                <div style="margin-left: 60px;">
                <div id="v2" style="display:none; padding-left: 10px; margin-top: -20px;">
                    <?php
                    require('../components/Reporting/CheckpointsReport.php')
                    ?>
                </div>
                </div>

                <!-- Checkpoints Summary Report -->
                <div style="margin-left: 60px;">
                <div id="v3" style="display:none; padding-left: 10px;  margin-top: -20px;">

                    <?php
                    require('../components/Reporting/CheckpointsSummaryReport.php')
                    ?>
                </div>
                </div>

                <!-- Checkpoints Timeline Report -->
                <div style="margin-left: 60px;">
                <div id="v4" style="display:none; padding-left: 10px;  margin-top: -20px;">
                    <?php
                    require('../components/Reporting/CheckpointsTimeline.php')
                    ?>
                </div>
                </div>

                <!-- Daily Activity Report -->
                <div style="margin-left: 60px;">
                <div id="v5" style="display:none; padding-left: 10px;  margin-top: -20px;">
                    <?php
                    require('../components/Reporting/DailyActivityReport.php')
                    ?>
                </div>
                </div>

                <!-- Daily Activity Report (Compact) -->
                <div style="margin-left: 60px;">
                    <div id="v6" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/DailyActivityReportCompact.php')
                        ?>
                    </div>
                </div>

                <!-- Daily Activity Report (Grouped) -->
                <div style="margin-left: 60px;">
                    <div id="v7" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/DailyActivityReportGrouped.php')
                        ?>
                    </div>
                </div>

                <!-- Issue History (With Notes) -->
                <div style="margin-left: 60px;">
                    <div id="v8" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/IssueHistoryWithNotes.php')
                        ?>
                    </div>
                </div>

                <!-- Issue History (Without Notes) -->
                <div style="margin-left: 60px;">
                    <div id="v9" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/IssueHistoryWithoutNotes.php')
                        ?>
                    </div>
                </div>

                <!-- Issue Summary -->
                <div style="margin-left: 60px;">
                    <div id="v10" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/IssueSummary.php')
                        ?>
                    </div>
                </div>

                <!-- Issue Summary Report Top 10 -->
                <div style="margin-left: 60px;">
                    <div id="v11" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/IssueSummaryReportTop10.php')
                        ?>
                    </div>
                </div>

                <!-- Login History Of Customers -->
                <div style="margin-left: 60px;">
                    <div id="v12" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/LoginHistoryOfCustomers.php')
                        ?>
                    </div>
                </div>

                <!-- Login History Of Employees -->
                <div style="margin-left: 60px;">
                    <div id="v13" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/LoginHistoryOfEmployee.php')
                        ?>
                    </div>
                </div>

                <!-- New Issue Timeslice -->
                <div style="margin-left: 60px;">
                    <div id="v14" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/NewIssueTimeslice.php')
                        ?>
                    </div>
                </div>

                <!-- Property Profile -->
                <div style="margin-left: 60px;">
                    <div id="v15" style="display:none; padding-left: 10px; margin-top: -20px;">
                        <?php
                        require('../components/Reporting/PropertyProfile.php')
                        ?>
                    </div>
                </div>

                <!-- Property Tasks Report -->
                <div style="margin-left: 60px;">
                    <div id="v16" style="display:none; padding-left: 10px; margin-top: -20px;">
                        <?php
                        require('../components/Reporting/PropertyTask.php')
                        ?>
                    </div>
                </div>

                <!-- Registered Devices -->
                <div style="margin-left: 60px;">
                    <div id="v17" style="display:none; padding-left: 10px; margin-top: -20px;">
                        <?php
                        require('../components/Reporting/RegisteredDevices.php')
                        ?>
                    </div>
                </div>

                <!-- Resident List -->
                <div style="margin-left: 60px;">
                    <div id="v18" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/ResidentList.php')
                        ?>
                    </div>
                </div>

                <!-- User Notification -->
                <div style="margin-left: 60px;">
                    <div id="v19" style="display:none; padding-left: 10px;  margin-top: -20px;">
                        <?php
                        require('../components/Reporting/UserNotification.php')
                        ?>
                    </div>
                </div>
            
            </div>

            
</form>
<script>
    <?php
    require('../assets/js/report.js')
    ?>
</script>