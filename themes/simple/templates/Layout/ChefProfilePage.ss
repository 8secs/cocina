<div class="row">
    <div class="three columns">
        <% include SideBar %>
    </div>
    <div class="nine columns">
        <article>
            <h2>$Title</h2>
            <div class="content">$Content</div>
        </article>
        <% if $Saved %>
            <p class="savedMessage">Your profile has been saved!</p>
        <% end_if %>
        $ChefProfileForm
        <% if $IsLocated %>
            $ShowMap
        <% end_if %>
        $PageComments
    </div>
</div>