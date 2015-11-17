<nav id="nav" class="primary">
    <% if $Menu(1) %>
        <!--<span class="nav-open-button">²</span>-->
        <ul>
            <% loop $Menu(1) %>
                <li class="$LinkingMode"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></li>
            <% end_loop %>
        </ul>
    <% end_if %>
</nav>
