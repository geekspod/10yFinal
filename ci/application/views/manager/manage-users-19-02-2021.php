	<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="alert alert-light alert-elevate" role="alert">
								<!-- <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div> -->
								<!-- <div class="alert-text">
									DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
									<br>For more info see <a class="kt-link kt-font-bold" href="https://datatables.net/" target="_blank">the official home</a> of the plugin.
								</div> -->
							</div>
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Users
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												<div class="dropdown dropdown-inline">
													<!--<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
													<!--	<i class="la la-download"></i> Export-->
													<!--</button>-->
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Choose an option</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-print"></i>
																	<span class="kt-nav__link-text">Print</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-copy"></i>
																	<span class="kt-nav__link-text">Copy</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-excel-o"></i>
																	<span class="kt-nav__link-text">Excel</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-text-o"></i>
																	<span class="kt-nav__link-text">CSV</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																	<span class="kt-nav__link-text">PDF</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
												&nbsp;
												<!--<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">-->
												<!--	<i class="la la-plus"></i>-->
												<!--	View Reports-->
												<!--</a>-->
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>

											<tr>
												<th>Sr</th>

												<th>Name</th>
												<th>Email</th>

												<th>Mobile</th>
												<th>Department</th>
												<th>Test Assigned</th>
												<th>Test Scores</th>

												<th>Report</th>
												<!--<th>Status</th>-->
												<!--<th>Date Created</th>-->



											</tr>
										</thead>
										 <?php
            	$i=0;
            	foreach ($dimensions as $row) {
            		$i++;
            		?>
										<tbody>

					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['first_name'];echo $row['last_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>

                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo "Work Personality Index"; ?></td>
                        <td><?php





                         $total=($row['Energy_and_drive'])+($row['Work_style'])+($row['Working_with_others'])+($row['Dealing_with_pressure_and_stress'])+($row['Problem_solving_style']);
                         echo $total=($total)/5;

                        ?></td>

                        <td><a href="<?php echo base_url();?>manager/login/user_reports/<?php echo $row['id']; ?>" style="    background-color: #5867dd;
    border-color: #5867dd;
    color: white;
    border: 1px solid;
    padding: 7px 12px">View</a></td>
      <!--<td><?php echo $row['status']; ?></td>-->
      <!--  <td><?php echo $row['date_created']; ?></td>-->


</tr>
<?php
            	}
            	?>



										</tbody>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>
