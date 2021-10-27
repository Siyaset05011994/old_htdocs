
<?php include "partials/header.php"; ?>

    <div id="content">

        <div class="content_items_bg" id="view_articles_div">
            <button id="create" class="btn">Create</button>

            <table id="articles_table" border="1px solid #e5e5e5">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <div class="content_items_bg" id="create_form_div">
            <form id="storeForm" method="POST">
                <label>Title</label><br>
                <input type="text" name="title" placeholder="Title..." id="title" class="article_items"> <br><br>
                <label>Description</label><br>
                <input type="text" name="description" placeholder="Description..." id="description" class="article_items"> <br><br>
                <label>Content</label><br>
                <textarea rows="8" cols="80" name="content" id="content" class="article_items" placeholder="Content..."></textarea>
                <input type="submit" id="store" value="Store">
            </form>
        </div>

    </div>

<?php include "partials/footer.php"; ?>


