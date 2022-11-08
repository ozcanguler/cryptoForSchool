var customers = {

"Paused":[
{"DrugName":"PAUSED 25 MG","StartTime":"07.07.2022","FinishTime":"27.07.2022","Receivable":"21.07.2022","Morning":"","Noon":"","Evening":"22:00"},
{"DrugName":"PAUSED 25 MG","StartTime":"09.06.2022","FinishTime":"29.06.2022","Receivable":"29.06.2022","Morning":"","Noon":"","Evening":"22:00"}
],
"Enox":[
{"DrugName":"ENOX 6000 ANTI-XA IU/0,6 ML","StartTime":"29.06.2022","FinishTime":"28.07.2022","Receivable":"29.07.2022","Morning":"","Noon":"","Evening":"18:00"},
{"DrugName":"ENOX 6000 ANTI-XA IU/0,6 ML","StartTime":"08.06.2022","FinishTime":"27.06.2022","Receivable":"28.06.2022","Morning":"","Noon":"","Evening":"18:00"}

],
"Ostezolen":[
{"DrugName":"OSTEZOLEN IV 4 MG/5 ML","StartTime":"08.06.2022","FinishTime":"08.06.2022","Receivable":"12.07.2022","NextDose":"20.07.2022"}

],
"Kordexa":[
{"DrugName":"KORDEXA 8 MG ","StartTime":"29.06.2022","FinishTime":"30.06.2022","NextDose":"20.07.2022"},
{"DrugName":"KORDEXA 8 MG ","StartTime":"22.06.2022","FinishTime":"22.06.2022","NextDose":"29.06.2022"},
{"DrugName":"KORDEXA 8 MG ","StartTime":"15.06.2022","FinishTime":"15.06.2022","NextDose":"22.06.2022"},
{"DrugName":"KORDEXA 8 MG ","StartTime":"08.06.2022","FinishTime":"08.06.2022","NextDose":"15.06.2022"}

],
"Klamoks":[
{"DrugName":"KLAMOKS-BID 1000 MG 14 FILM TB","StartTime":"08.06.2022","FinishTime":"11.06.2022","Morning":"10:00","Evening":"22:00"}

],
"Valcyte":[
{"DrugName":"VALCYTE ROCHE 450 MG 60 FILM TB","StartTime":"25.05.2022","FinishTime":"08.06.2022","Morning":"09:00","Evening":"21:00"}

],
"Melphalan":[
{"DrugName":"MELPHALAN 50 MG 1 INJECTION","StartTime":"","FinishTime":"","Morning":"","Evening":""}

],
"Allerset":[
{"DrugName":"ALLERSET 10 MG.20 TB.","StartTime":"02.07.2022","FinishTime":"","Receivable":"20.07.2022"},  
{"DrugName":"ALLERSET 10 MG.10 TB.","StartTime":"20.06.2022","FinishTime":"01.07.2022","Receivable":"29.06.2022"}

],
"Geralgine":[
{"DrugName":"GERALGINE-K 500/30/10 MG 20 TABLET","StartTime":"25.02.2022","FinishTime":"","Receivable":"06.04.2022"}

],
"drugs":[
{"DrugName":"PANTPAS 40 MG","StartFinishTime":"26.11.2021-","Receive":"22.08.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"SYNJARDY 5MG/1000 MG","StartFinishTime":"10.01.2022-","Receive":"08.08.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"LEVEMIR FLEXPEN 100U ML 5X3 ML","StartFinishTime":"16.02.2022-","Receive":"28.05.2022","Morning":"10","Noon":"","Evening":"10","Night":""},
{"DrugName":"ON CALL PLUS BLOOD GLUCOSE 50 STRIP","StartFinishTime":"10.01.2022-","Receive":"10.07.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"COVERAM 10 MG+ 10 MG","StartFinishTime":"26.11.2021-","Receive":"23.08.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"PLAVIX 75 MG","StartFinishTime":"14.04.2021-","Receive":"18.08.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"TRAJENTA 5 MG","StartFinishTime":"","Receive":"20.07.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"ASIVIRAL 400 MG","StartFinishTime":"23.12.2021-","Receive":"20.07.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"URIKOLIZ","StartFinishTime":"23.12.2021-","Receive":"08.09.2022","Morning":"","Noon":"HALF","Evening":"","Night":""},
{"DrugName":"CALCIMAX-D3 1000 MG","StartFinishTime":"27.12.2021-","Receive":"20.07.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"VEMLIDY 25MG","StartFinishTime":"06.01.2022-","Receive":"03.10.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"CARDURA 4 MG ","StartFinishTime":"14.04.2021-","Receive":"01.08.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"CONCOR 5 MG","StartFinishTime":"31.03.2022-","Receive":"29.07.2022","Morning":"","Noon":"","Evening":"","Night":""},
{"DrugName":"D-COLEFOR 20.000 IU","StartFinishTime":"27.12.2021-","Receive":"06.09.2022","Morning":"","Noon":"","Evening":"ON TUESDAY","Night":""}
]};

var count = Object.keys(customers.drugs).length;
console.log(count);
$(document).ready(function(){
   console.log('document is ready. I can sleep now');

   for (var i = 0; i < count*7; i++) {
     if(i==3||i==17||i==19||i==10||i==12)
     //document.querySelectorAll("tr")[1].children[1].style.backgroundColor="green";
     document.querySelectorAll("td")[i].style.backgroundColor="red";
     if(i==24||i==26||i==38||i==31||i==46||i==53||i==60||i==67||i==75||i==82||i==89||i==96)
     document.querySelectorAll("td")[i].style.backgroundColor="green";
     document.querySelectorAll("td")[96].style.color="white";
     document.querySelectorAll("td")[60].style.color="white";
     document.querySelectorAll("td")[96].style.textAlign="center";
     document.querySelectorAll("td")[60].style.textAlign="center";
     document.querySelectorAll("td")[17].style.color="white";
     document.querySelectorAll("td")[19].style.color="white";
     document.querySelectorAll("td")[17].style.textAlign="center";
     document.querySelectorAll("td")[19].style.textAlign="center";
   }
});
//Object.entries(customers.drugs)[0][1];
