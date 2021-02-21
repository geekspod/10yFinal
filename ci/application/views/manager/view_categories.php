
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="alert alert-light alert-elevate" role="alert">
								<!-- <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
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
											Test
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												<div class="dropdown dropdown-inline">
													<!-- <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="la la-download"></i> Export
													</button> -->
													<!-- <div class="dropdown-menu dropdown-menu-right">
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
													</div> -->
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
									<table class="table table-striped- table-bordered table-hover table-checkable table-responsive w-100 d-block d-lg-table" id="kt_table_1">
										<thead>
											<tr class="view_categories_table">
												<th style="vertical-align: unset">Sr. </th>
												<th style="vertical-align: unset">Test Title</th>
												<th style="vertical-align: unset">Department</th>
												<th style="vertical-align: unset">Number of Assigned Users</th>
											<th style="vertical-align: unset">Number of users with completed tests</th>
											<th style="vertical-align: unset">Number of users with incomplete tests</th>
												<th style="vertical-align: unset">Number of users not yet attempted test</th>
												<th style="vertical-align: unset">Average score of completed test</th>
												<th style="vertical-align: unset">Percentage of qualified users (completed test)</th>



												<!--<th>Actions</th>-->
											</tr>
										</thead>
										<tbody>
                                        <?php
            	$i=0;
            	foreach ($categories as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['name']; ?></td>
                        <td>Natural Sciences</td>
                        <td><a href="#" class="btn btn-label btn-label-brand btn-sm btn-bold">15</a></td>
                        <td>	<a href="#" class="btn btn-label btn-label-brand btn-sm btn-bold">10</a></td>
                        <td>5</td>
                        <td>5</td>
                        <td>75%</td>
                        <td>67%</td>
                        <!--<td nowrap></td>-->
                        <!--<td nowrap></td>-->
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
