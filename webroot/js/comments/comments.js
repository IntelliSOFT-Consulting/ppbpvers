$(function() {
    $(document).on('click', '.remove-attachment', remove_attachment);
    var intId = 0;
    var trWrapper = '\
          <div class="row-fluid attacho">\
            <div class="span10"><input name="attachments[{i}][id]" id="attachments-{i}-id" type="hidden"> \
            <input type="hidden" id="attachments{i}Dirname" name="attachments[{i}][dirname]">\
             <input type="hidden" id="attachments{i}Foreign_Key" name="attachments[{i}][foreign_key]" value="0">\
            <input type="hidden" id="attachments{i}Basename" name="attachments[{i}][basename]">\
            <input type="hidden" id="attachments{i}Checksum" name="attachments[{i}][checksum]">\
                <input name="attachments[{i}][file]" id="attachments-{i}-file" type="file" class="firo"> \
                <input type="hidden" id="attachments-{i}-model" value="Comments" name="attachments[{i}][model]" style="display: inline;">\
                <input type="hidden" id="attachments-{i}-category" value="{n}" name="attachments[{i}][category]" style="display: inline;">\
                <textarea name="attachments[{i}][description]" id="attachments-{i}-description" class="flow"\
                          placeholder="descripton" cols="16" rows="1"></textarea> \
            </div>\
            <div class="span2">\
                <button type="button" class="btn btn-danger btn-small remove-attachment"><i class="icon-minus"></i></button>\
            </div>\
          </div><hr>\ ';
    // incremental development
    $(".addUpload").click(function() {
      intId = intId + 1;
      //console.log($(this).closest('form').find('input[name="model"]').val());
      //console.log($(this).closest('form').find('#model').val());
      name = $(this).closest('form').find('input[name="model"]').val();

      if ($(this).closest('div.uploadsTable').children('div.attacho').length < 7) {            
          trVar = $.parseHTML(trWrapper.replace(/{i}/g, intId).replace(/{n}/g, name));
          $(this).closest("div.uploadsTable").append(trVar);
      } else {
          alert("Sorry, can't add more than "+intId+" Attachments at a time!");
      }
    });

    function remove_attachment() {
      $(this).closest('.attacho').remove();        
    }
    

});
