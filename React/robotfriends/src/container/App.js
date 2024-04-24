import React, { useState, useEffect } from "react";
import CardList from "../components/CardList";
// import {robots} from "./robots"
import SearchBox from "../components/SearchBox"
import Scroll from "../components/Scroll"
import "./App.css"





function App() {

    // constructor() {
    //     super()
    //     this.state = {
    //         robots: [],
    //         searchField: ''
    //     }
    // }


    const [robots, setRobots] = useState([])
    const [searchfield, setSearchfield] = useState('')
    const [count, setCount] = useState(0)

    // componentDidMount() {
    //     fetch('https://jsonplaceholder.typicode.com/users')
    //         .then(response => response.json())
    //         .then(users => this.setState({ robots: users }))

    // }
    useEffect(() => {
        fetch('https://jsonplaceholder.typicode.com/users')
            .then(response => response.json())
            .then(users => setRobots(users))
    }, [])

    const onSearchChange = (event) => {
        setSearchfield(event.target.value)

    }


    const filteredRobots = robots.filter(robots => {
        return robots.name.toLowerCase().includes(searchfield.toLowerCase())
    })

    return !robots.length ?
        <h1>Caricamento...</h1> :
        (
            <div className="tc">
                <h1>RoboFriends</h1>
                <SearchBox searchChange={onSearchChange} />
                <Scroll>
                    <CardList robots={filteredRobots} />
                </Scroll>
            </div >
        )


}


export default App