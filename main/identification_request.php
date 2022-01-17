
<!--testing something-->
<script type="text/javascript">
var FormStuff = {    init: function() {    this.applyConditionalRequired();    this.bindUIActions();  },    bindUIActions: function() 
{    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);  },    applyConditionalRequired: function() 
{        $(".require-if-active").each(function() {      var el = $(this);      if ($(el.data("require-pair")).is(":checked")) 
{        el.prop("required", true);      } else {        el.prop("required", false);      }    });      }  };FormStuff.init();
</script>
<style type="text/css">
.reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  font-size: 16px;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
.reveal-if-active label {
  display: block;
  margin: 0 0 3px 0;
}
.reveal-if-active input[type=text] {
  width: 100%;
}
input[type="radio"]:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
  opacity: 1;
  max-height: 500px;
  padding: 10px 20px;
  -webkit-transform: scale(1);
          transform: scale(1);
  overflow: visible;
}



* {
  box-sizing: border-box;
}
</style>


  
  <div>
      <input type="radio" <?php echo $nostate; ?> name="identific_test" id="identific_test-no" value="NO">
      <label for="identific_test-no">NO</label>
    
     
    </div>
      
	  
    <div>
      <input type="radio" <?php echo $yesstate; ?> name="identific_test" id="identific_test-yes" value="YES" required>
      <label for="identific_test-yes">YES</label>
    </div>
	
     