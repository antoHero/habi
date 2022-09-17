<style>
#styleSelect {
    height: 50px;
}

.hideStyleDiv {
    display: none;
}

.sewThis {
    background: transparent;
    color: #000;
}

.sewThis:hover {
    background: #000;
    color: #fff;
}


    
.option {
    display: flex;
    position: relative; 
    -webkit-box-align: center;
    align-items: center;
    justify-content: center;
    height: 39px;
    background-color: white;
    border-bottom: 1px solid grey;
}
.option>div {
    max-width: 150px;
    height: inherit;
    min-width: 40px;
    margin: 1%;
    justify-content: center;
    padding: 10px;
    font-size: 0.7em;
    border-radius: 3px;
    transition: all .3s ease;
}
.option>div:hover {
    background-color: #DDD; 
    cursor: pointer;
    border: 1px solid grey;
}
.left-icon {
    display: inline-block; 
    float: left;
    height: auto;
    width: 12%;
    padding: 1em;
    margin-right: 10px;
}
.left-icon>div {
    margin-bottom: 15px; 
    border-radius: 50%;
} 
#left-circle {
    height: 40px;
    width: 100%;
    border-radius: 50%;
}
#left-circle:hover {
    border: 2px solid blue;
}
@media (max-width: 768px) {
    .main {
        max-width: 100%;
        margin:0;
    }
    .left-icon { 
        display: flex;
        justify-content: flex-start;
        width: 100%;
        height: 15%;
        margin-bottom:0;
        overflow-x: scroll;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
    }
    .left-icon>div {
        margin-bottom:0;
    }

    #left-circle {
        height: 60px;
        width: 60px;
        justify-content: center;
        text-align: center;
        margin-right: 20px;
        bottom: 0;
    }
}
.column {
    float: left;
    width: 43%;
    height: 90vh;
    justify-content: center;
    margin-right: 13px;
    margin-top:10px;
}
.row:after {
    content: "";
    clear:both;
    display: table;
}
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
        height: 90vh;
        margin-bottom: 10px;
        right:0;
        left:0;
        top:0;
    }
 
    li {
        font-size: 1em;
    }
    .icon-box {
        margin-top: 100px;
        margin-bottom: 40px;
    } 
}
.row:after {
    content: "";
    display: table;
}
#img-holder {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 90vh;
} 

#flex-icon {
    width: 100%;
    height:100%;
}


.product__details-color input {
     display: none;
}
.product__details-color input:checked + label{
     box-shadow: 0 0 0 1px #151515, inset 0 0 0 2px #fff;
     
}

.product__details-color label {
     display: inline-block;
     height: 20px;
     width: 35px;
     cursor: pointer;
     border: 1px solid transparent;
     position: relative;
     margin-right: 5px;
}
 product__details-color label:hover {
     border-color: #000;
}
.product__details-color .cor1 {
     background-color: #4986e7;
     border-color: #4986e7;
}







.product__details-size input {
     display: none;
}
.product__details-size input:checked + label{
     box-shadow: 0 0 0 1px #151515, inset 0 0 0 2px #fff;
     
}

.product__details-size label {
     display: inline-block;
    width: 35px;
    height: 20px;
    line-height: 18px;
    background-color: #fff;
    border: 1px solid #e1e1e1;
    font-size: 11px;
    text-align: center;
    font-weight: 500;
    overflow: hidden;
}
 product__details-size label:hover {
     border-color: #000;
}

    
</style>