
    $(function(){
         // alert(showReplyHtml(1,2));

        //Comment add function
            $("#addComment").click(function(){
                var id = $("#post_id").val();
                var comment = $("#comment").val();
                
                $.ajax({
                    type: "POST",
                    url: commentLink,
                    data:{ post_id:id , comment_body:comment},
                    dataType: "json",
                    success: function(response){
                        console.log(response.html);
                        $("#comments").append(response.html);
                    },
                }); //End of Ajax
            });

        //End of add comments
        
        
        //show reply form
            $("#comments").on("click",".showReply",function(){

                var working = $(this).closest('.media');
                var parent = working.data("id");
                var thread = "{{$thread->id}}";
                $(".replyForm").remove();
                working.find(".media-body").first().append(showReplyHtml(thread,parent));
            });
            



        //Ajax to reply form
            
            $("#comments").on("click",".addReply",function(){

                var parent = $(this).parent().find("input.parent").val();
                var thread_id = $(this).parent().find('input.post_id').val();
                var body = $(this).parent().find("textarea.body").val();
                
                var toAppend = $(this).closest('.media-body');

                $.ajax({
                    type: "POST",
                    url: replyLink,
                    data:{ body:body , parent:parent, thread:thread_id},
                    dataType: "json",
                    success: function(response){
                        console.log(response.html);
                        toAppend.append(response.html);
                        $(".replyForm").remove();
                    },
                }); //End of Ajax
       
                
                 
            });
    
    });
</script>
