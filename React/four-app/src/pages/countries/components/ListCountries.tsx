import { ICountry } from "../../../models/ICountry"

interface ICountriesProps{
    countries : ICountry[]
}

export const ListCountries: React.FC<ICountriesProps> = ({countries}) => {

  return (
    <>
        { countries.length > 0 ? countries.map( (country: ICountry, index: number) => { 

           return <div key={index}>
                    <h2>{country.name.common}</h2>
           </div>
        }) : <h1>Loading</h1> }
    </>
  )
}

