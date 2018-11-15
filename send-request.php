<!-- Place this file at the bottom of each of the files -->

<script type="text/javascript">
function updateLiveUsers()
{
var xmlReq=new XMLHttpRequest();
xmlReq.open("POST","store-users.php",false);
xmlReq.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlReq.send()
}

setInterval("updateLiveUsers()",35000);//send request at every 35th seconds

</script>