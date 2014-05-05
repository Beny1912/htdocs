/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var time= date()

var header = Array();
    
$("table tr td").each(function(i, v){
        header[i] = $(this).text();
    
})
if(header[1]="10:00:50"){
 alert(header[0] + header[2]);              
}