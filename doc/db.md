# 資料庫規劃
* resume
    * id - int(11)
    * name - varchar(22)
    * education - varchar(60)
    * intro - text
    * autobiography - text
    * email
    * resume_id                           配合語法
    * sh                                  版面顯示

* collections 
    * id - int(11)
    * name
    * img - varchar(22)
    * link - varchar(60)
    * resume_id - int(11)                 對應id
    * skills                              對應所使用的skills

* css
    * id
    * name                                selector
    * htc                                 t =>text   c=>css
    * attr                                css 專用
    * val   
    * resume_id                           對應id

* educations
    * id
    * school
    * project                              科目
    * resume_id                           對應id

* skills
    * id 
    * name
    * level                               自我評估分數，0-100
    * img 
    * resume_id                           對應id

* workexp
    * id
    * company
    * position                              職位
    * year
    * month
    * resume_id                          對應id
