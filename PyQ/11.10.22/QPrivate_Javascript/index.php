<!DOCTYPE html>
<html lang="en">
<head>
<title>My Drugs</title>
  <link rel="stylesheet" href="PharsSilcss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://www.w3schools.com/appml/2.0.3/appml.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--
  <script src="https://www.w3schools.com/appml/2.0.3/appml.js"></script>
-->
  <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  -->
  <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
-->
</head>
<body>

<div class="w3-container" appml-data="customers" >
<h1>Indefinite Drugs</h1>
<!-- <div class="w3-panel w3-leftbar w3-rightbar w3-sand w3-medium w3-serif"> -->
<div class=" w3-leftbar w3-rightbar w3-sand w3-medium w3-serif">
<table class="table table-bordered border-primary" id="regularly" >

  <thead>
    <tr>
      <th>Name</th>
      <th>Start Time - Finish Time</th>
      <th>Receivable</th>
      <th>Morning</th>
      <th>Noon</th>
      <th>Evening</th>
      <th>Night</th>
</tr>
  </thead>
  <tbody>
<tr appml-repeat="drugs">
  <td>{{DrugName}}</td>
  <td>{{StartFinishTime}}    </td>
  <td>{{Receive}} </td>
  <td>{{Morning}} </td>
  <td>{{Noon}} </td>
  <td>{{Evening}} </td>
  <td>{{Night}} </td>
</tr>

</tbody>
</table>






</div>
</div>


	<div class="col-md-12" id="regularlypanel">
    	<div class="panel panel-primary">
				<div class="panel-heading">
					Chemo & other Drugs
				</div>
        <div class="panel-body" >
					<table class="table table-condensed table-striped">
    <thead>



    <tbody>


      <tr data-toggle="collapse" data-target="#demo8" class="accordion-toggle">
             <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
             <td>ALLERSET 10 MG.10 TB.</td>
             <td>Once a day if needed</td>
             <td style="font-weight: bolder;color:orange;">Stable</td>

        </tr>
        <tr>
            <td colspan="12" class="hiddenRow">
              <div class="accordian-body collapse" id="demo8" appml-data="customers">
              <table class="table table-striped">
                      <thead>
                        <tr class="info">
                          <th>Start Time</th>
                          <th>Finish Time</th>
                          <th>Receivable</th>

                        </tr>
                      </thead>

                      <tbody>

                        <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo8" appml-repeat="Allerset">

                          <td>{{StartTime}}</td>
                          <td>{{FinishTime}}</td>
                          <td>{{Receivable}}</td>

                        </tr>



                      </tbody>
                </table>
              </div>
            </td>
            </tr>

      <tr data-toggle="collapse" data-target="#demo7" class="accordion-toggle">
             <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
             <td>MELPHALAN 50 MG 1 INJECTION</td>
             <td>Null</td>
             <td style="font-weight: bolder;color:red;">Passive</td>
             <td></td>
             <td></td>
        </tr>
        <tr>
            <td colspan="12" class="hiddenRow">
              <div class="accordian-body collapse" id="demo7" appml-data="customers">
              <table class="table table-striped">
                      <thead>
                        <tr class="info">
                          <th>Start Time</th>
                          <th>Finish Time</th>
                          <th>Morning</th>
                          <th>Noon</th>
                          <th>Evening</th>
                          <th>Night</th>
                        </tr>
                      </thead>

                      <tbody>

                        <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo7" appml-repeat="Melphalan">

                          <td>{{StartTime}}</td>
                          <td>{{FinishTime}}</td>
                          <td>{{Morning}}</td>
                          <td></td>
                          <td>{{Evening}}</td>
                          <td></td>
                        </tr>



                      </tbody>
                </table>
              </div>
            </td>
            </tr>


        <tr data-toggle="collapse" data-target="#demo6" class="accordion-toggle">
           <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
            <td>PAUSED 25 MG</td>
            <td>One per day</td>
            <td style="font-weight: bolder;color:green;">Active</td>
            <td></td>
            <td></td>
        </tr>
  </thead>
        <tr>
            <td colspan="12" class="hiddenRow">
							<div class="accordian-body collapse" id="demo6" appml-data="customers">
              <table class="table table-striped">
                      <thead>
                        <tr class="info">
													<th>Start Time</th>
													<th>Finish Time</th>
                          <th>Receivable</th>
													<th>Morning</th>
													<th>Noon</th>
													<th>Evening</th>
												</tr>
											</thead>

											<tbody>

                        <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo6" appml-repeat="Paused">

													<td>{{StartTime}}</td>
													<td>{{FinishTime}} </td>
                          <td>{{Receivable}}</td>
													<td>{{Morning}}</td>
													<td>{{Noon}}</td>
                          <td>{{Evening}}</td>
												</tr>

                      </tbody>
               	</table>
              </div>
            </td>
            </tr>



            <tr data-toggle="collapse" data-target="#demo5" class="accordion-toggle">
                   <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                   <td>ENOX 6000 ANTI-XA IU/0,6 ML</td>
                   <td>One per day</td>
                   <td style="font-weight: bolder;color:green;">Active</td>
                   <td></td>
                   <td></td>
              </tr>
              <tr>
                  <td colspan="12" class="hiddenRow">
      							<div class="accordian-body collapse" id="demo5" appml-data="customers">
                    <table class="table table-striped">
                            <thead>
                              <tr class="info">
      													<th>Start Time</th>
      													<th>Finish Time</th>
                                <th>Receivable</th>
      													<th>Morning</th>
      													<th>Noon</th>
      													<th>Evening</th>
      												</tr>
      											</thead>

      											<tbody>

                              <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo5" appml-repeat="Enox">

      													<td>{{StartTime}}</td>
      													<td>{{FinishTime}} </td>
                                <td>{{Receivable}}</td>
      													<td>{{Morning}}</td>
      													<td>{{Noon}}</td>
                                <td>{{Evening}}</td>
      												</tr>



                            </tbody>
                     	</table>
                    </div>
                  </td>
                  </tr>

                  <tr data-toggle="collapse" data-target="#demo4" class="accordion-toggle">
                         <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                         <td>OSTEZOLEN IV 4 MG/5 ML</td>
                         <td>One per month</td>
                         <td style="font-weight: bolder;color:green;">Active</td>
                         <td></td>
                         <td></td>
                    </tr>
                    <tr>
                        <td colspan="12" class="hiddenRow">
                          <div class="accordian-body collapse" id="demo4" appml-data="customers">
                          <table class="table table-striped">
                                  <thead>
                                    <tr class="info">
                                      <th>Start Time</th>
                                      <th></th>
                                      <th>Finish Time</th>
                                      <th>Receivable</th>
                                      <th></th>
                                      <th>Next Dose</th>
                                    </tr>
                                  </thead>

                                  <tbody>

                                    <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo4" appml-repeat="Ostezolen">

                                      <td>{{StartTime}}</td>
                                      <td> </td>
                                      <td>{{FinishTime}}</td>
                                      <td>{{Receivable}}</td>
                                      <td></td>
                                      <td>{{NextDose}}</td>
                                    </tr>



                                  </tbody>
                            </table>
                          </div>
                        </td>
                        </tr>

                        <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
                               <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                               <td>KORDEXA 8 MG</td>
                               <td>Two and a half doses per week</td>
                               <td style="font-weight: bolder;color:green;">Active</td>
                               <td></td>
                               <td></td>
                          </tr>
                          <tr>
                              <td colspan="12" class="hiddenRow">
                                <div class="accordian-body collapse" id="demo3" appml-data="customers">
                                <table class="table table-striped">
                                        <thead>
                                          <tr class="info">
                                            <th>Start Time</th>
                                            <th></th>
                                            <th>Finish Time</th>
                                            <th></th>
                                            <th></th>
                                            <th>Next Dose</th>
                                          </tr>
                                        </thead>

                                        <tbody>

                                          <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo3" appml-repeat="Kordexa">

                                            <td>{{StartTime}}</td>
                                            <td> </td>
                                            <td>{{FinishTime}}</td>
                                            <td></td>
                                            <td></td>
                                            <td>{{NextDose}}</td>
                                          </tr>



                                        </tbody>
                                  </table>
                                </div>
                              </td>
                              </tr>

                              <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                                     <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                                     <td>GERALGINE-K 500/30/10 MG 20 TABLET</td>
                                     <td>Once a day if needed</td>
                                     <td style="font-weight: bolder;color:orange;">Stable</td>
                                     <td></td>
                                     <td></td>
                                </tr>
                                <tr>
                                    <td colspan="12" class="hiddenRow">
                                      <div class="accordian-body collapse" id="demo2" appml-data="customers">
                                      <table class="table table-striped">
                                              <thead>
                                                <tr class="info">
                                                  <th>Start Time</th>
                                                  <th>Finish Time</th>
                                                  <th>Receivable</th>


                                                </tr>
                                              </thead>

                                              <tbody>

                                                <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo2" appml-repeat="Geralgine">

                                                  <td>{{StartTime}}</td>
                                                  <td>{{FinishTime}}</td>
                                                  <td>{{Receivable}}</td>
                                                  </tr>





                                              </tbody>
                                        </table>
                                      </div>
                                    </td>
                                    </tr>


                              <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                     <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                                     <td>KLAMOKS-BID 1000 MG</td>
                                     <td>Every twelve hours</td>
                                     <td style="font-weight: bolder;color:red;">Passive</td>
                                     <td></td>
                                     <td></td>
                                </tr>
                                <tr>
                                    <td colspan="12" class="hiddenRow">
                                      <div class="accordian-body collapse" id="demo1" appml-data="customers">
                                      <table class="table table-striped">
                                              <thead>
                                                <tr class="info">
                                                  <th>Start Time</th>
                                                  <th>Finish Time</th>
                                                  <th>Morning</th>
                                                  <th>Noon</th>
                                                  <th>Evening</th>
                                                  <th>Night</th>
                                                </tr>
                                              </thead>

                                              <tbody>

                                                <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo1" appml-repeat="Klamoks">

                                                  <td>{{StartTime}}</td>
                                                  <td>{{FinishTime}}</td>
                                                  <td>{{Morning}}</td>
                                                  <td></td>
                                                  <td>{{Evening}}</td>
                                                  <td></td>
                                                </tr>



                                              </tbody>
                                        </table>
                                      </div>
                                    </td>
                                    </tr>

                                    <tr data-toggle="collapse" data-target="#demo0" class="accordion-toggle">
                                           <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                                           <td>VALCYTE ROCHE 450 MG</td>
                                           <td>Two doses every twelve hours</td>
                                           <td style="font-weight: bolder;color:red;">Passive</td>
                                           <td></td>
                                           <td></td>
                                      </tr>
                                      <tr>
                                          <td colspan="12" class="hiddenRow">
                                            <div class="accordian-body collapse" id="demo0" appml-data="customers">
                                            <table class="table table-striped">
                                                    <thead>
                                                      <tr class="info">
                                                        <th>Start Time</th>
                                                        <th>Finish Time</th>
                                                        <th>Morning</th>
                                                        <th>Noon</th>
                                                        <th>Evening</th>
                                                        <th>Night</th>
                                                      </tr>
                                                    </thead>

                                                    <tbody>

                                                      <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo0" appml-repeat="Valcyte">

                                                        <td>{{StartTime}}</td>
                                                        <td>{{FinishTime}}</td>
                                                        <td>{{Morning}}</td>
                                                        <td></td>
                                                        <td>{{Evening}}</td>
                                                        <td></td>
                                                      </tr>



                                                    </tbody>
                                              </table>
                                            </div>
                                          </td>
                                          </tr>






                </div>

            </div>
      	</div>
<script src="PharsSiljs.js" charset="utf-8"></script>

</body>
</html>
