<style>
.collapse a {
    text-indent: 10px;
}
</style>

<nav id="sidebar" class='mx-lt-5 bg-white'>
    <div class="sidebar-list">
        <ul class="menu-list">
            <div class="menu-item">
                <li><a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i
                                class="fa fa-home"></i></span> Home</a>
                </li>
            </div>
            <div class="menu-item">
                <li><a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i
                                class="fa fa-tags"></i></span> Category/Tags</a>
            </div>
            <div class="menu-item">
                <li><a href="index.php?page=topics" class="nav-item nav-topics"><span class='icon-field'><i
                                class="fa fa-comment"></i></span> Discussion</a></li>
            </div>
            <?php if($_SESSION['login_type'] == 1): ?>
            <div class="menu-item">
                <li><a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i
                                class="fa fa-users"></i></span> Users</a></li>
            </div>
            <?php endif; ?>
        </ul>
    </div>

</nav>
<script>
$('.nav_collapse').click(function() {
    console.log($(this).attr('href'))
    $($(this).attr('href')).collapse()
})
$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>