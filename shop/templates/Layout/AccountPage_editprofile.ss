<div class="row">
    <div class="three columns">
        <% include SideBar %>
    </div>
    <div class="nine columns">
        <div class="u-pull-right"><% include AccountNavigation %></div>
        $Content
        <h2 class="pagetitle"><%t AccountPage_EditProfile.Title 'Edit Profile' %></h2>

        $EditAccountForm
        <h2 class="pagetitle"><%t AccountPage_EditProfile.ChangePassword 'Change Password' %></h2>
        $ChangePasswordForm

    </div>
</div>
<div class="clear"></div>
