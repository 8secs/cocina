<div class="row">
    <div class="three columns">
        <% include SideBar %>
    </div>
    <div class="nine columns">
        <div class="u-pull-right"><% include AccountNavigation %></div>
        <% if Order %>
            <% with Order %>
                <h2><% _t('AccountPage.ss.ORDER','Order') %> $Reference ($Created.Long)</h2>
            <% end_with %>
        <% end_if %>
        <% if Message %>
            <p class="message $MessageType">$Message</p>
        <% end_if %>
        <% if Order %>
            <% with Order %>
                <% include Order %>
            <% end_with %>
            $ActionsForm
        <% end_if %>
    </div>
</div>
<div class="clear"></div>