let selectedOption = document.getElementById("selectCharacter")
let selectSkill = document.getElementById('selectSkill')
let video = document.getElementById('Video')
let skill = document.getElementById('skill')
let description = document.getElementById('description')
let skillIcon = document.getElementById('skillIcon')

if (video !== null) {
    video.children[0].src = localStorage.getItem(0)
    video.load();
    video.play();
}

if (description !== null) {
    description.innerHTML = sessionStorage.getItem(0)
}
if (skillIcon !== null) {
    skillIcon.src = sessionStorage.getItem('skillIcon0')
}

if ( sessionStorage.getItem('selectedCharacter') === null){
    sessionStorage.setItem('selectedCharacter', selectedOption = 1)
} else {
    if(selectedOption !== null){
        selectedOption.options[sessionStorage.getItem('selectedCharacter')].defaultSelected = true
    }
}

if ( sessionStorage.getItem('selectSkill') === null){
    sessionStorage.setItem('selectSkill', 0)
} else {
    if (selectSkill !== null){
        selectSkill.options[sessionStorage.getItem('selectSkill')].defaultSelected = true
    }
}

function setUrl(){
    selectedOption = document.getElementById("selectCharacter").options.selectedIndex
    history.replaceState({},'', selectedOption + 1)
    sessionStorage.setItem('selectedCharacter', selectedOption)
    sessionStorage.setItem('selectSkill', 0)
    location.reload()
}

function setSkill()
{
    selectSkill = document.getElementById("selectSkill").value
    localStorage.setItem('selectSkill', selectSkill)
    sessionStorage.setItem('selectDescription', selectSkill)

    video.children[0].src = localStorage.getItem(selectSkill)
    video.load();
    video.play();

    description.innerHTML = sessionStorage.getItem(selectSkill)
    skillIcon.src = sessionStorage.getItem('skillIcon'+selectSkill)
}

function editUser($id)
{
    let dialog = document.getElementById("edit-dialog" + $id)
    console.log(dialog, $id)
    dialog.style.display = 'flex'
    dialog.open = true
}

function ChangeInformation()
{
    let dialog = document.getElementById('ChangeInformation')
    dialog.open = true
    dialog.style.display = 'flex'
}

function cancelChange()
{
    let dialog2 = document.getElementById('addMember')
    let dialog = document.getElementById('ChangeInformation')
    let dialog3 = document.getElementById('addArticle')
    if (dialog !== null) {
        dialog.style.display = 'none'
        dialog.open = false
    }
    if (dialog2 !== null) {
        dialog2.style.display = 'none'
        dialog2.open = false
    }
    if (dialog3 !== null) {
        dialog3.style.display = 'none'
        dialog3.open = false
    }
}
function cancelEditUser($id)
{
    let dialog = document.getElementById("edit-dialog" + $id)
    dialog.style.display = 'none'
    dialog.open = false
}
function addmember(){
    let dialog = document.getElementById('addMember')
    dialog.style.display = "flex"
    dialog.open = true
}
function addarticle(){
    let dialog = document.getElementById('addArticle')
    dialog.open = true
    dialog.style.display = 'flex'
}
