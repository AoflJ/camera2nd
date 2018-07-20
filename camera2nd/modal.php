<script>
    $(document).ready(function(){
        $('.view_data').click(function(){
            var id = $(this).attr("id");
            $.ajax({
                url:"select.php",
                method:"post",
                data:{id:id},
                success:function(data){
                    $('#detail').html(data);
                    $('#dataModal').modal('show');
                }
            });
            
        });
    }); 

</script>