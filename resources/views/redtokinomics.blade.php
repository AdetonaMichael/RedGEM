@extends('layouts.app')
@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-black pt-1">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 id="hero-caption" class="text-black text-6xl text-whitie guppercase font-bold text-shadow-md pb-8">Red Tokenomics </h1>
            <a href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 hover:bg-yellow-500 rouhover:text-gray-900 font-bold text-xl uppercase">ReadMore</a>
        </div>
    </div>
</div>

<div class="table_holder text-center justify-center bg-white shadow-lg rounded md:mx-20  border-gray-300 p-10 md:m-10">
    <p class="text-center bg-red p-5 font-bold font-sans bg-red-700 text-white font-4xl">Red Tokenomics</p>
    <p class="mt-5 text-center bg-red p-5 font-bold font-sans bg-yellow-400 text-black font-4xl">RedGEM Token TOKENOMICS
    </p>
<table class=" table table-auto p-5 border-yellow-400">
    <thead>
        <tr>
           <th>S/N</th>
           <th>ITEMS</th>
           <th>VALUES</th>
        </tr>
    </thead>
    <tbody class="my-2">
        <tr class="p-5 p-5border-yellow-400">
            <td>1</td>
            <td>Token Ticker</td>
            <td>RGEM</td>
        </tr>
        <tr class="p-5 p-5border-yellow-400">
            <td>2</td>
            <td>Token Name</td>
            <td>RedGEM</td>
        </tr>
        <tr class="p-5 p-5border-yellow-400">
            <td>3</td>
            <td>1 ETH = ? USD (Approximate) </td>
            <td>$2567 (₦1.06 Million)
            </td>
        </tr>
        <tr class="p-5 p-5border-yellow-400">
            <td>4</td>
            <td>1 RedGEM = ? USD (Approximate)</td>
            <td>0.0</td>
        </tr>
        <tr class="p-5border-yellow-400">
            <td>5</td>
            <td>1 ETH = ? RedGEM</td>
            <td>5000 RHYC</td>
        </tr>
        <tr class="p-5border-yellow-400">
            <td>5</td>
            <td>Total No. of RedGEM / ETH</td>
            <td>10 000 000 / 10 000</td>
        </tr>
        <tr class="p-5border-yellow-400">
            <td>6</td>
            <td>SOFT CAP / HARD CAP</td>
            <td>$200 Thousand / $500 000 (₦82.5 Million / ₦206.27 Million)
            </td>
        </tr>
    </tbody>
    <span class="my-5"></span>
  
</table>
<p class="text-center bg-red p-5 mt-5 font-bold font-sans bg-yellow-400 text-black font-4xl">ALLOCATION & DISTRIBUTION OF RedGEM TOKEN</p>

<table class="table p-5border-yellow-400 table-auto">
    <thead>
        <tr>
            <th>S/N</th>
            <th>ITEMS</th>
            <th colspan=4>VALUES</th>
        </tr>
    </thead>
    <tbody>
        <tr class="p-5border-yellow-400">
            <td>Del</td>
            <td>Type</td>
            <td>NUMBER OF TOKENS</td>
            <td>%</td>
            <td>ETH</td>
            <td>USD</td>
        </tr>
        <tr class="p-5border-yellow-400">
            <td data-label="S/N">1</td>
            <td data-label="Type">TOTAL SUPPLY</td>
            <td data-label="Number Of Token">000 000 </td>
            <td data-label="%"> 100%</td>
            <td data-label="ETH"></td>
            <td data-label="USD"></td>
        </tr>
        <tr class="p-5border-yellow-400">
            <td data-label="S/N " >2</td>
            <td data-label="Type " >Company</td>
            <td data-label="Number of Token " ></td>
            <td data-label="% " ></td>
            <td data-label="ETH " ></td>
            <td data-label=" USD" ></td>
        </tr>
        <tr class="p-5border-yellow-400">
            <td td data-label=" S/N" >3</td>
            <td td data-label="Type " >Team - Founders’ & Advisors’ Reserve</td>
            <td td data-label="Number of Token " >2 000 000</td>
            <td td data-label="%" >20%</td>
            <td td data-label="ETH " >2000 </td>
            <td td data-label="USD " >1 000 000</td>
        </tr>
        <tr class="p-5 border-yellow-400">
            <td>4</td>
            <td>Marketing Fund</td>
            <td>100 000</td>
            <td>1%</td>
            <td>100</td>
            <td>50 000</td>
        </tr>
        <tr class="p-5 border-yellow-400">
            <td>5</td>
            <td>Ecosystem Managemen</td>
            <td>400 000 </td>
            <td>4% </td>
            <td>400</td>
            <td>200 000</td>
        </tr>
        <tr class="p-5 border-yellow-400">
            <td>6</td>
            <td>Liquidity Bootstrapping.</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="p-5 border-yellow-400">
            <td>7</td>
            <td>Airdrop</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="p-5 border-yellow-400">
            <td>8</td>
            <td>Pre Crowd-Sale – Early Supporters, Strategic & Angel Investors</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>9</td>
            <td>ICO (CROWD-SALE) – Tier 1 </td>
            <td>6 000 000</td>
            <td>50%</td>
            <td>6000</td>
            <td>3 000 000</td>
        </tr>
        <tr>
            <td>10</td>
            <td>ICO (CROWD-SALE) – Tier 2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>11</td>
            <td>ICO (CROWD-SALE) – Tier 3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
<p class="text-center bg-red p-5 my-5 font-bold font-sans bg-yellow-400 text-black font-4xl">ALLOCATION & DISTRIBUTION OF RedGEM TOKEN</p>
<table class="table p-5 border-yellow-400">
   <tr class="extra"> <td colspan=2>We've created the INITIAL TOTAL SUPPLY; we will also keep INCREASINGLY CREATING THE DEMAND FOR IT among 300+ 
        Million Individuals. There will be great surge in the demand for RED Tokens owing to
     </td></tr>
        <tbody>
         <tr class="p-5 border-yellow-400">
             <td>1</td>
             <td>Node Count</td>
         </tr>
         <tr>
             <td>2</td>
             <td> Mass Adoption</td>
         </tr>
         <tr>
             <td>3</td>
             <td> Daily Functionality As A Utility Token (Our Sole Payment Method Will Drive The Demand Economy)</td>
         </tr>
         <tr>
             <td>4</td>
             <td> Its Use-Case As A Security Asset, Voting Rights In Our Ecosystem, Tradable & Store Of Value</td>
         </tr>
         <tr>
             <td>5</td>
             <td> Its Popular Demand Among Users (Service Driven Token Demand)
            </td>
         </tr>
         <tr>
             <td>6</td>
             <td>. Scarcity, Limited Total Supply Nature Of Our Tokens (Demand Will Push Its Value Up, Especially For Our Token With SO GREAT UTILITY)
            </td>
         </tr>
         <tr>
             <td>7</td>
             <td> Listing & Availability On Major Exchanges & As A Tradable Token e.g. Binance</td>
         </tr>
         <tr>
             <td>8</td>
             <td> Perceived Value (Markets, Credible Companies)
            </td>
         </tr>
         <tr>
             <td>9</td>
             <td> Number Of Competing Altcoins</td>
         </tr>
         <tr>
             <td>10</td>
             <td> Our Total Market Size (Our Services So Enticing It Will Create Consistent High Demand For Our Tokens)</td>
         </tr>
         <tr class="extra">
             <td colspan=2> THE MORE THE PEOPLE THAT EXECUTE TRANSACTIONS, THE GREATER THE DEMAND FOR 
                COINS (RedGEM) WILL BE AND WILL, THEREFORE, PUSH PRICES UP!</td>
         </tr>
     </tbody>
    </table>

</div>

@endsection 