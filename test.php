<form id="form-search" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <span><span class="style2">Enter you email here</span>:</span>
    <input name="email" type="email" id="email" required/>
    <input type="submit" name="submit" value="subscribe"/>
</form>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
    if(isset($_POST['submit'])){
        echo "
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your registration is successful',
                    showConfirmButton: false,
                    timer: 3000
                })
            </script>
        ";
    }
    echo $_SERVER['REQUEST_URI'];
?>