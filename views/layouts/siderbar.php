<div class="container-fluid bg-white sticky-top">  
    <div class="container">  
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">  
            <a href="index.html" class="navbar-brand">  
                <img class="img-fluid" src="assets/img/logo.png" alt="Logo">  
            </a>  
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">  
                <span class="navbar-toggler-icon"></span>  
            </button>  
            <div class="collapse navbar-collapse" id="navbarCollapse">  
                <div class="navbar-nav ms-auto">  
                    <a href="?act=/" class="nav-item nav-link" id="home" onclick="setActivePage('home')">Home</a>  
                    <a href="?act=about" class="nav-item nav-link" id="about" onclick="setActivePage('about')">About</a>  
                    <a href="?act=product" class="nav-item nav-link" id="product" onclick="setActivePage('product')">Products</a>  
                    <a href="?act=store" class="nav-item nav-link" id="store" onclick="setActivePage('store')">Store</a>  
                    <div class="nav-item dropdown">  
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>  
                        <div class="dropdown-menu bg-light rounded-0 m-0">  
                            <a href="?act=feature" class="dropdown-item" id="feature" onclick="setActivePage('feature')">Features</a>  
                            <a href="?act=blog" class="dropdown-item" id="blog" onclick="setActivePage('blog')">Blog Article</a>  
                            <a href="?act=testimonial" class="dropdown-item" id="testimonial" onclick="setActivePage('testimonial')">Testimonial</a>  
                            <a href="?act=404" class="dropdown-item" id="404" onclick="setActivePage('404')">404 Page</a>  
                        </div>  
                    </div>  
                    <a href="?act=contact" class="nav-item nav-link" id="contact" onclick="setActivePage('contact')">Contact</a>  
                    <!-- Sign Up and Log In buttons -->
                    <?php if(empty($_SESSION['user_name'])&&empty($_SESSION['user_id'])){ ?>  
                    <div id="authButtons">  
                        <a href="?act=signup" class="nav-item nav-link" id="signup" onclick="setActivePage('signup')">Sign Up</a>  
                    </div>  
                    <div id="authButtons">  
                        <a href="?act=login" class="nav-item nav-link" id="login" onclick="setActivePage('login')">Log In</a>  
                    </div>  
                    <?php }else{ ?>
                        <div class="nav-item dropdown">  
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['user_name']; ?></a>  
                            <div class="dropdown-menu dropdown-menu-sm">  
                                <a href="?act=logout" class="dropdown-item" id="logout" onclick="setActivePage('logout')">Log Out</a>
                                <?php if($_SESSION['user_role']==0){
                                    echo '<a href="admin" class="dropdown-item">Admin</a>';
                                } ?>
                                
                            </div>
                        </div>
                    <?php } ?>
                </div>  
                <div class="border-start ps-4 d-none d-lg-block">  
                    <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>  
                </div>  
                <!-- Cart Icon -->
                <div class="border-start ps-4 d-none d-lg-block">  
                    <a href="?act=viewCart" class="btn btn-sm p-0"><i class="fa fa-shopping-cart"></i></a>  
                </div>  
            </div>  
        </nav>  
    </div>  
</div>  

<script>  
// Hàm này sẽ thay đổi class "active" cho các mục trong nav  
function setActivePage(pageId) {  
    // Lấy tất cả các liên kết a trong navbar  
    const links = document.querySelectorAll('.navbar-nav .nav-link, .dropdown-menu .dropdown-item');  
    
    // Xóa class "active" ở tất cả các link  
    links.forEach(link => {  
        link.classList.remove('active');  
    });  

    // Thêm class "active" vào link được click  
    const activeLink = document.getElementById(pageId);  
    if (activeLink) {  
        activeLink.classList.add('active');  
    }  
}  

// Set trạng thái active cho trang hiện tại nếu đã có class active  
document.addEventListener("DOMContentLoaded", function() {  
    // Lấy tham số act từ URL  
    const currentPage = window.location.search.split('=')[1];  
    
    // Kiểm tra nếu currentPage là null hoặc trống, tức là đang ở trang chủ  
    if (!currentPage || currentPage === '/') {  
        setActivePage('home');  
    } else {  
        setActivePage(currentPage);  
    }  

    // Kiểm tra trạng thái đăng nhập  
    checkLoginStatus();  
});  

// Giả lập kiểm tra trạng thái đăng nhập  
function checkLoginStatus() {  
    // Thay thế đoạn này bằng logic kiểm tra trạng thái đăng nhập thực tế  
    const isLoggedIn = false; // Giả sử người dùng chưa đăng nhập  
    const username = "John Doe"; // Giả sử tên người dùng  

    if (isLoggedIn) {  
        document.getElementById('authButtons').classList.add('d-none');  
        document.getElementById('userInfo').classList.remove('d-none');  
        document.getElementById('username').textContent = `Welcome, ${username}`;  
    } else {  
        document.getElementById('authButtons').classList.remove('d-none');  
        document.getElementById('userInfo').classList.add('d-none');  
    }  
}  

// Hàm đăng xuất  
function logout() {  
    
}  
</script>
