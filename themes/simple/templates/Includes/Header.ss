<header class="header">
    <div class="row">
        <div class="seven columns"><a href="$BaseHref" class="brand" rel="home">
            <h1>$SiteConfig.Title</h1>
            <% if $SiteConfig.Tagline %>
                <p>$SiteConfig.Tagline</p>
            <% end_if %>
        </a></div>
        <div class="five columns">
            <div class="u-pull-right" style="width: inherit;">
                <% if $CurrentMember %>
                    <div class="row">
                        <div class="two columns u-pull-right" style="margin-left: 20px;">
                            <a href="Security/Logout"><img src="themes/simple/images/logout.png" alt="logout" width="24" /></a>
                        </div>
                        <div class="six columns u-pull-right">
                            <div style="text-align: right;"><a href="user-profile"><strong>$CurrentMember.FirstName</strong></a></div>
                        </div>

                    </div>


                <% else %>
                    <div style="text-align: right;">
                        <a href="$FacebookLoginLink">Facebook</a>
                        <a href="home/register">Register</a>
                        <a href="Security/Login">Login</a>
                    </div>
                    
                <% end_if %>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="twelve columns u-pull-right">
            <div class="u-pull-right"> <% include Navigation %></div></div>
    </div>

</header>
