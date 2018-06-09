<?php $timeall = array("8.00-9.50","10.00-11.50","12.00-13.50","14.00-15.50","16.00-17.50","18.00-19.50","20.00-21.50"); ?>

                        <div class="body table-responsive">
                            <table class="table table-bordered display dataTable with-check">
                                <thead>
                                    <tr>
                                        <th style="background-color: #00a968;color: white"><center>วัน-เวลา</th>
                                        <th style="background-color: #00a968;color: white"><center>8.00-9.50</th>
                                        <th style="background-color: #00a968;color: white"><center>10.00-11.50</th>
                                        <th style="background-color: #00a968;color: white"><center>12.00-13.50</th>
                                        <th style="background-color: #00a968;color: white"><center>14.00-15.50</th>
                                        <th style="background-color: #00a968;color: white"><center>16.00-17.50</th>
                                        <th style="background-color: #00a968;color: white"><center>18.00-19.50</th>
                                        <th style="background-color: #00a968;color: white"><center>20.00-21.50</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th style="background-color: #00a968;color: white">จันทร์</th>
                                        <?php
                                            for ($row=0; $row <= 6; $row++) {
                                                // echo  "<td class='select-checkbox'></td>";
                                                echo '<td style="background-color: #fffdce"></td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #00a968;color: white">อังคาร</th>
                                        <?php
                                            for ($row=0; $row <= 6; $row++) {
                                                // echo  "<td class='select-checkbox'></td>";
                                                echo '<td style="background-color: #fffdce"></td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #00a968;color: white">พุธ</th>
                                        <?php
                                            for ($row=0; $row <= 6; $row++) {
                                                // echo  "<td class='select-checkbox'></td>";
                                                echo '<td style="background-color: #fffdce"></td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #00a968;color: white">พฤหัสบดี</th>
                                        <?php
                                            for ($row=0; $row <= 6; $row++) {
                                                // echo  "<td class='select-checkbox'></td>";
                                                echo '<td style="background-color: #fffdce"></td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #00a968;color: white">ศุกร์</th>
                                        <?php
                                            for ($row=0; $row <= 6; $row++) {
                                                // echo  "<td class='select-checkbox'></td>";
                                                echo '<td style="background-color: #fffdce"></td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #00a968;color: white">เสาร์</th>
                                        <?php
                                            for ($row=0; $row <= 6; $row++) {
                                                // echo  "<td class='select-checkbox'></td>";
                                                echo '<td style="background-color: #fffdce"></td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #00a968;color: white">อาทิตย์</th>
                                        <?php
                                            for ($row=0; $row <= 6; $row++) {
                                                // echo  "<td class='select-checkbox'></td>";
                                                echo '<td style="background-color: #fffdce"></td>';
                                            }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                                <center><button type="submit" class="btn btn-success m-t-15 waves-effect">ยืนยัน</button>
                                <button type="reset" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button></center>
                        </div>