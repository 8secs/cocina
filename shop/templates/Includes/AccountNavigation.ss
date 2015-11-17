<nav id="nav" class="primary">
    <ul>
        <li>
            <a href="{$Link}">
                <%t AccountNavigation.PastOrders 'Past Orders' %>
            </a>
        </li>
        <li>
            <a href="{$Link(editprofile)}">
                </i><%t AccountNavigation.EditProfile 'Edit Profile' %>
            </a>
        </li>
        <li>
            <a href="{$Link(addressbook)}">
                </i><%t AccountNavigation.AddressBook 'Address Book' %>
            </a>
        </li>
    </ul>
</nav>