import React from 'react';
 
export default class PeopleList extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            people: null 
        };
    }

    componentDidMount() { 
        fetch('http://www.mi6.test:8080/api/person')
            .then(response => response.json())
            .then(data => (
                this.setState({
                    people: data
                })
            ))
    }
    
    render() {
        if (!this.state.people) {
            return 'Loading...'
        }

        return (
            <>
                {this.state.people.map((person, key) => (
                    <div key={key}>
                        <img src={person.image.path} alt=""/>
                        <h4>{person.name}</h4>
                    </div>
                ))}
            </>
        );
    }
}