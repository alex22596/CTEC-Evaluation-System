
$(document).ready(function(){
    $("#createInstallation").click(function(){
        $("#showCreateInstallation").show();
        $("#showModifyInstallation").hide();
        $("#showDeleteInstallation").hide();
    });
    $("#modifyInstallation").click(function(){
        $("#showModifyInstallation").show();
        $("#showCreateInstallation").hide();
        $("#showDeleteInstallation").hide();
    });
    $("#deleteInstallation").click(function(){
      $("#showDeleteInstallation").show();
      $("#showModifyInstallation").hide();
      $("#showCreateInstallation").hide();
    });
});
