<% require themedCSS(productcategory,shop) %>

<div class="row">
    <div class="three columns">
        <div id="Sidebar">
            <% include ProductMenu %>
            <div class="cart">
                <% include SideCart %>
            </div>
        </div>
    </div>
    <div class="nine columns">
        <div id="ProductGroup">
            <h1 class="pageTitle">$Title</h1>
            <% if Content %>
                <div>
                    $Content
                </div>
            <% end_if %>

            <% if Products %>
                <div id="Products" class="category">
                    <% include Sorter %>
                    <div class="clear"><!-- --></div>
                    <ul class="productList">
                        <% loop Products %>
                            <% include ProductGroupItem %>
                        <% end_loop %>
                    </ul>
                    <div class="clear"><!-- --></div>
                    <% include ProductGroupPagination %>
                </div>
            <% end_if %>
        </div>
    </div>
</div>





