<div class="row">
    <div class="three columns">
        <% include SideBar %>
    </div>
    <div class="nine columns">
        <article>
            <h2>$Title</h2>
            <div class="content">$Content</div>
        </article>
        <% if $Success %>
            <p class="savedMessage">You have successfully registered!</p>
            <p>Your details are as follows: </p>
            <% with $CurrentMember %>
                <p>
                    Name: $Name<br />
                    Email: $Email<br />
                </p>
            <% end_with %>
            <a href="$Link">Edit details</a>
        <% else %>
            <% if $Saved %>
                <p class="savedMessage">Your profile has been saved!</p>
            <% end_if %>
            $EditProfileForm
        <% end_if %>
    </div>
</div>

