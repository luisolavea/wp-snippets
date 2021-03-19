add_action('init', 'remove_guttenberg_from_pages', 10);
function remove_guttenberg_from_pages()
{
    remove_post_type_support('project', 'editor');
}
