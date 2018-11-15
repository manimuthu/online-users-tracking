<div class='live_users' id='live_users'>
	
	<span style='font-weight:bold;background:#0A90CC !important;color:#fff;'>Fetching live users ...</span>

</div>



<script>

    function getLiveUsers()
    {
	var xmlReq=new XMLHttpRequest();
	xmlReq.open("POST","fetch-users.php",false);
	xmlReq.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlReq.send()
    document.getElementById("live_users").innerHTML=xmlReq.responseText
    }

	setInterval("getLiveUsers()",60000);
</script>



<style>
.body_content
{
    width: auto !important;
}
.live_users span font
{
    display: none;
    position: absolute;
    padding: 10px;
    background: #ffc862;
    border-radius:5px;
    right:0px;
    z-index:3;
}
.live_users span:hover font
{
    display: block;
}
.live_users span
{
    border-bottom: 1px solid #a4e0fb;
    display: block !important;
    float: left;
    padding: 10px;
    width: 100%;
    position: relative;
}
.live_users
{
    width:30%;
    border-right:2px solid #0A90CC;
    /*border-top:1px solid #0A90CC;*/
}
.active_usr
{
    background: green;
    padding: 6px !important;
    width: 5px !important;
    border-radius:8px;
    margin: 3px 5px 0 0;
}
</style>