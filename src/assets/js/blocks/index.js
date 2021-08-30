// useful blog hover
export function usefulBlogHover () {
    if(document.querySelector('.usefulBlogHover_js')) {
        const list = document.querySelector('.usefulBlog__list');
        const hoversElem = list.querySelectorAll('.usefulBlogHover_js');
        let parent;
        hoversElem.forEach((item) => {
            item.onmouseover = function(elem) {
                parent = item.closest('.usefulBlog__item');
                parent.classList.add('hover');
            };
            item.onmouseout = function(elem) {
                parent = item.closest('.usefulBlog__item');
                parent.classList.remove('hover');
            };
        });
    }
}