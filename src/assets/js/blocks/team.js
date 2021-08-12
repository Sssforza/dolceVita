// tabs specificity of the doctor
export function tabsSpecificityDoctor () {
    if(document.querySelector('.teamList')) {
        const container = document.querySelector('.teamList');
        container.addEventListener('click', function(e) {
            const tabs = document.querySelectorAll('.teamItem_js')
            const target = e.target
            Array.from(tabs).forEach(item => {
                item.classList.remove('active')
            })
            target.classList.add('active')
        })
	}
}