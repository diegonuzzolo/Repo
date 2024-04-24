import React from "react";

const Scroll = (props) => {
    return (

        <div style={{ overflowY: 'scroll', margin: 'auto', border: '10px solid', borderInlineColor: "#9e3b32", width: '50%', height: '500px' }}>

            {props.children}

        </div>

    )
}

export default Scroll