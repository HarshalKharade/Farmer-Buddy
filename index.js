function func_logout() {
	// This functions destroys all session variable and sign outs the current logged in user

	c = confirm("Are You Sure to logout?");

	if (c==true)
	{
		location.href="logout.php";
	}
}