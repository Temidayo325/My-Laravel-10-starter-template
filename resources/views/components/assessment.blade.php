<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta autocorrect="off" autocomplete="off" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Economic Assessment page</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<style>
		body{
	    	background-image: linear-gradient(#d1d5db 1px, transparent 0px);
	    	background-size: 100% 2em;

	    	background-position-y: 1.5rem;
	    	line-height: 2.2em;
		}
	</style>
</head>
<body class="" x-data="questions">
	<div class="w-full flex justify-center items-center relative">
		<form action="/submitAssessment" method="post" class="w-3/5 py-20">
			<div>
				<h1 class="font-medium text-2xl my-2 mb-10 ">Section A</h1>
				<table class="border border-gray-500 mx-auto px-3 py-2">
					<thead >
						<th class="px-12 py-3">Item</th>
						<th class="px-12">Million ($) </th>
					</thead>
					<tbody>
						<tr >
							<td class="px-3">Wages and Salaries</td>
							<td class="px-3 text-center">250</td>
						</tr>
						<tr>
							<td class="px-3">Income Paid</td>
							<td class="px-3 text-center">75</td>
						</tr>
						<tr>
							<td class="px-3">Income from Self Employment</td>
							<td class="px-3 text-center">120</td>
						</tr>
						<tr>
							<td class="px-3">Stock Appreciation</td>
							<td class="px-3 text-center">5</td>
						</tr>
						<tr>
							<td class="px-3">Interest </td>
							<td class="px-3 text-center">10</td>
						</tr>
						<tr>
							<td class="px-3">Income Received from Abroad</td>
							<td class="px-3 text-center">50</td>
						</tr>
						<tr>
							<td class="px-3">Rent</td>
							<td class="px-3 text-center">25</td>
						</tr>
						<tr>
							<td class="px-3">Depreciation Allowance</td>
							<td class="px-3 text-center">3</td>
						</tr>
						<tr>
							<td class="px-3">Royalties </td>
							<td class="px-3 text-center">2</td>
						</tr>
						<tr>
							<td class="px-3">Profits and Dividends</td>
							<td class="px-3 text-center">35</td>
						</tr>
					</tbody>
				</table>
				<ol class="mt-6 mb-2">
					<p>From the data above, answer the following questions. Calculate the:</p>
					<li>
						<label for="gdp" class="block text-md font-medium">(a)Gross Domestic Product (GDP);</label>
							<textarea autocorrect="off" autocomplete="off" name="option2" id="gdp" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md one"></textarea>
					</li>

					<li>
						<label for="gnp" class="block text-md font-medium">(b)Gross National Product (GNP)</label>
							<textarea id="gnp" autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md one"></textarea>
					</li>

					<li>
						<label for="nnp" class="block text-md font-medium">(c)Net National Product (NNP)</label>
							<textarea  autocorrect="off" autocomplete="off" name="option2" id="nnp" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md one"></textarea>
					</li>
				</ol>
			</div>
			<h1 class="font-medium text-2xl mt-12 mb-12">Section B</h1>
			<ol class="list-decimal">
				<li class="questions min-h-screen mb-28">
					<p class="font-bold text-lg text-black">Distinguish between the following pairs of terms:</p>
					<ul class="ml-10">
						<li class="mb-10 mt-4">
							<label class="block text-md font-medium">Capital expenditure and Recurrent expenditure</label>
							<textarea x-model="one.answer" autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md one"></textarea>
						</li>
						<li class="mb-10">
							<label class="block text-md font-medium">Fiscal policy and Monetary policy</label>
							<textarea x-model="two.answer" autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>
						</li>
						<li>
							<label for="block text-md font-medium">Explain four (4) reasons why government of a country imposes taxes.</label>

							<textarea  autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_one"></textarea>
							<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_one"></textarea>
							<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_one"></textarea>
							<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_one"></textarea>
						</li>
					</ul>
				</li>
				<li class="questions min-h-screen mb-28">
					<p class="font-bold text-lg">What is money?</p>
					<textarea x-model="three.answer" autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md" x-model="four"></textarea>

					<p class="font-bold text-lg">Explain the following concepts:</p>
					<ul class="ml-5 mt-3">
						<li class="">
							<label class="block text-md font-medium">The value of money</label>
							<textarea x-model="four.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md" x-model="five"></textarea>
						</li>
						<li>
							<label class="block text-md font-medium">The demand for money</label>
							<textarea x-model="five.answer" autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>
						</li>
					</ul>
					<p class="font-bold text-lg">Identify any four (4) determinants of transactions demand for money</p>
					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_two"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_two"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_two"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_two"></textarea>
				</li>
				<li class="questions min-h-screen mb-28 py-28">
					<p class="font-bold text-lg">What is Economic integration</p>

					<textarea x-model="six.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>

					<p class="font-bold text-lg mt-5">Outline any three short-comings of Economic Community of West African States (ECOWAS)</p>
					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_three"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_three"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_three"></textarea>

					<p class="font-bold text-lg mt-5">Highlight ant three achievements of the Economic Community of West African States (ECOWAS)</p>
					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_four"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_four"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_four"></textarea>
				</li>
				<li class="questions min-h-screen mb-28">
					<p class="font-bold text-lg" >Distinguish between domestic and external trade</p>
					<textarea x-model="seven.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>

					<p class="font-bold text-lg mt-5">Distinguish between term of trade and balance of trade.</p>
					<textarea x-model="eight.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>

					<p class="font-bold text-lg mt-6">Outline four causes of balance of payments deficit in a country.</p>
					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_five"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_five"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_five"></textarea>
				</li>
				<li class="questions min-h-screen mb-28">
					<p class="font-bold text-lg">Differentiate between Labour force and efficiency of labour</p>
					<textarea x-model="nine.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>

					<p class="font-bold text-lg mt-10">Describe five factors which determine the size of the labour force in a country.</p>
					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_six"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_six"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_six"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_six"></textarea>

					<textarea autocorrect="off" autocomplete="off" name="option2" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-24 focus:shadow-md list_six"></textarea>
				</li>
				<li class="questions min-h-screen mb-28 pb-20">
					<ul>
						<p class="font-bold text-lg">Distinguish between</p>
						<li class="mt-5">
							<label class="block text-md font-medium">Money cost and Opportunity cost</label>
							<textarea x-model="ten.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>
						</li>
						<li class="mt-3">
							<label class="block text-md font-medium">Normal goods and Inferior goods</label>
							<textarea x-model="eleven.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>
						</li>
					</ul>

					<ul class="mt-8">
						<p class="font-bold text-lg">Explain how the scale of preference assist the following economic groups in making efficient allocation of their resources:</p>
						<li class="ml-8 mb-3">
							<label class="block text-md font-medium">Individual</label>
							<textarea x-model="twelve.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>
						</li>
						<li class="ml-8 mb-3">
							<label class="block text-md font-medium">Firms</label>
							<textarea x-model="thirteen.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>
						</li>
						<li class="ml-8 mb-3">
							<label class="block text-md font-medium">Government</label>
							<textarea x-model="fourteen.answer" autocorrect="off" autocomplete="off" name="" id="" class="w-full py-2 px-2 my-2 mb-4 block border-2 border-gray-200 w-3/5 h-44 focus:shadow-md"></textarea>
						</li>
					</ul>
				</li>
			</ol>
			<button type="submit" class="px-10 py-4 bg-black shadow-md hover:shadow-lg  text-white text-lg fixed right-10 bottom-10" @click.prevent="submitPaper()">Submit paper</button>
		</form>
		<div x-init="timervalues.currentTime = 150 * 60
            setTimeout(() => {
                 timervalues.ongoing = setInterval(() => {
                      timer()
                  }, 1000)
            }, 1000)" class="flex justify-center my-5 fixed right-10 text-black bg-white top-10">
               <div class="border border-gray-700 rounded-lg py-6 px-12 shadow-xl border-b-2">
                    <h1 class="font-bold text-2xl" x-text="timervalues.minutes + ' : ' + timervalues.seconds"></h1>
               </div>
		</div>
	</div>

</body>
<script>
	document.addEventListener('alpine:init', () => {
			Alpine.store('statistics', {
	            	
	        }),
	        Alpine.data('questions', () => ({
	        	admission_number: "{{$admission_number}}",
	        	one: { scheme: 'Capital expenditure are expenses made by government on physical assets that are durable in nature while Recurrent expenditure are expenses that are made by government on regular basis.', answer_type: 'word', mark: 4, answer: '' },
	        	two: { scheme: 'Fiscal policy- is the use of taxation and government spending to achieve desired economic objectives while Monetary policy - involves the use of instruments such as interest rates, open market operations etc. to regulate money supply to achieve desired economic objectives', answer_type: 'word', mark: 4, answer: '' },
	        	three: { scheme: 'Money is anything that is generally acceptable as a medium of exchange and used in the settlement of debts', answer_type: 'word', mark: 2, answer: '' },
	        	four: { scheme: 'The value of money is the amount of goods and services a given monetary unit can buy. The greater the amount of goods and services that can be purchased with a give unit of money, the greater the value of money and vice-versa', answer_type: 'word', mark: 3, answer: '' },
	        	five: { scheme: 'The demand for money is a derived demand. It is the desire o hold money in liquid form rather than investing it in stocks and bonds. People hold money for transactions, precautionary and speculative motives', answer_type: 'word', mark: 3, answer: '' },
	        	six: { scheme: 'Economic Integration is a form of international cooperation among nations to achieve a greater efficiency in the production of goods and services for the social and economic welfare of their countries', answer_type: 'word', mark: 2, answer: '' },
	        	seven: { scheme: 'Domestic trade is the exchange of goods and services within the borders of a country and involves the use of only one currency, etc. while External trade is the exchange of goods and services across the borders of a country and involves the use of different currencies, etc', answer_type: 'word', mark: 4, answer: '' },
	        	eight: { scheme: 'Term of trade is the rate at which a country’s exports is exchanged for its imports. OR Terms of trade = Index of export prices       × 100 Index of import prices while Balance of trade is the difference between the value of a country’ s visible exports and its visible imports over a time period.', answer_type: 'word', mark: 4, answer: '' },
	        	nine: { scheme: 'Labour force refers to the proportion of a country’s population in the working age group who are employed or are seeking employment, while Efficiency of labour refers to the ability of labour to achieve the highest output possible without compromising quality in a given period of time.', answer_type: 'word', mark: 5, answer: '' },
	        	ten: { scheme: 'Money cost is the expenses in terms of money incurred to produce or have a commodity while Opportunity cost or real cost is the alternative forgone or that which has to be sacrificed to have a commodity', answer_type: 'word', mark: 4, answer: '' },
	        	eleven: { scheme: 'A normal good is a good for which its demand increases when income increases and demand decreases when income decreases While an inferior good is a good for which its demand tends to fall when income rises and its demand rises when income falls.', answer_type: 'word', mark: 4, answer: '' },
	        	twelve: { scheme: 'Individual: When an individual is faced with the problem of limited resources, a scale of preference will enable such an individual to order/arrange his wants according to which one gives the highest amount of satisfaction/ is urgently needed/ is the most important. He will then allocate his resources to obtain the want that gives the highest amount of satisfaction.', answer_type: 'word', mark: 4, answer: '' },
	        	thirteen: { scheme: 'Firms: A firm is also faced with the problem of limited resources needed to produce everything it wants. It will therefore rank its production according to which product will give highest amount of satisfaction which is measured in terms of profit. The firm will therefore allocate its resources according to which product gives the highest amount of profit.', answer_type: 'word', mark: 4, answer: '' },
	        	fourteen: { scheme: 'Government is also faced with the problem of limited resources/revenue. It cannot therefore produce all the goods and services it wants. It will therefore rank the goods and services according to which one will give the citizenry the highest amount of well-being or welfare. It will therefore allocate the resources to produce such goods and services.', answer_type: 'word', mark: 4, answer: '' },
	        	timervalues: {minutes: 0, seconds: 0, currentTime: 0, ongoing: 0},
	            changedInput() {
	            	            	
	            },
	            submitPaper()
	            {
	            	let finalArray = []

	            	let Singlelist = document.querySelectorAll(".list_one");
            		let list_one = [];
	            	Singlelist.forEach((elem) => {
	            		list_one.push(elem.value)
	            	});
	            	first_object = { answer_type: "list", mark: 3, answer: list_one, scheme: [
	            		'To raise revenue for administration, defence and provide social services', 
	            		'To regulate the importation of some commodities considered harmful. The tax makes the goods expensive to deter consumers', 
	            		'To redistribute income between the rich and the poor. This is done through the PAYE system where the rich pay higher tax than the poor.', 
	            		'To protect local infant industries from foreign competition', 
	            		'To correct a balance of payments problem by imposing taxes on imports to increase their prices to discourage imports’', 
	            		'To check deflation or inflation.', 
	            		'To prevent dumping. Taxes are imposed on dumped goods to raise their prices to discourage imports.', 
	            		'As a retaliatory measure against other countries.', 
	            		'To create and protect employment in the domestic economy. 3marks each for any 4 point well explained.'] }
	            	finalArray.push(first_object)

	            	Singlelist = document.querySelectorAll(".list_two");
            		list_one = [];
	            	Singlelist.forEach((elem) => {
	            		list_one.push(elem.value)
	            	});
	            	second_object = { answer_type: "list", mark: 3, answer: list_one, scheme: [
	            		'Level of income: The higher the amount of income one earns, the higher the amount of money that would be held to meet day-to-day expenses',
	            		'Interval between pat days: The shorter the interval between pay days, the lower the amount of money to be held while the longer the interval, the more the amount to be held', 
	            		'The rate of interest: The higher the rate of interest, the lower the amount of money held for transactions and vice versa',
	            		'The price level: If the price level is high, more money has to be held to meet daily transactions and vice versa',
	            		'Status in the society: A well placed man in the society is expected to hold a large sum of money to maintain his status',
	            		'The size of one’s family: a person with large family is expected to hold more money and vice versa',
	            		'Personal tastes: A person with a high taste for goods will normally hold more money',
	            		'Availability of credit facilities reduces the tendency to hold more money for transactions',
	            		'Advancement in technology in the banking sector e.g., e-banking, debit card etc. reduces the amount of held for transactions'] };
	            	finalArray.push(second_object)

	            	Singlelist = document.querySelectorAll(".list_three");
            		list_one = [];
	            	Singlelist.forEach((elem) => {
	            		list_one.push(elem.value)
	            	});
	            	third_object = { answer_type: "list", mark: 3, answer: list_one, scheme: [
	            		'Divided loyalty of member states',
	            		'Ideological differences', 
	            		'Inability to create common currency.',
	            		'Differences in levels of development among members states/ fear of domination of small countries by big countries',
	            		'Political/ social instability in the sub-region.',
	            		'Inability to differentiate her products. Members produce similar primary products.',
	            		'Inadequate infrastructural facilities in the sub-region',
	            		'Lack of political will to implement the policies/agreements of the union',
	            		'Non-payment of dues by some member states.',
	            		'Negative attitude towards member countries because of language differences',
	            		'Differences in trade policies in member countries'] };
	            	finalArray.push(third_object)

	            	Singlelist = document.querySelectorAll(".list_four");
            		list_one = [];
	            	Singlelist.forEach((elem) => {
	            		list_one.push(elem.value)
	            	});
	            	fourth_object = { answer_type: "list", mark: 3, answer: list_one, scheme: [
	            		'Removal of custom duties',
	            		'Reduced administrative restrictions e.g., on investment', 
	            		'Establishment of common fund for co-operation, compensation and development.',
	            		'Mediation among member states',
	            		'Formation of economic community of West African Sates Monitoring Group (ECOMOG).',
	            		'Growth and expansions of markets',
	            		'Unity in the sub-region',
	            		'Cooperation in culture and sports',
	            		'Free movement of labour'] };
	            	finalArray.push(fourth_object)

	            	Singlelist = document.querySelectorAll(".list_five");
            		list_one = [];
	            	Singlelist.forEach((elem) => {
	            		list_one.push(elem.value)
	            	});
	            	fifth_object = { answer_type: "list", mark: 3, answer: list_one, scheme: [
	            		'Increased demand for foreign consumer goods due to high taste for foreign goods',
	            		'Demand for foreign capital goods due to rapid industrialization', 
	            		'Unfavourable terms of trade because of falling commodity prices',
	            		'Decrease in demand for local exports as a result of emergence of synthetic substitutes',
	            		'Export of unprocessed primary products which attract lower prices in the world market.',
	            		'Debt servicing due to borrowing from foreign lenders and inability to raise enough capital from domestic sources',
	            		'Transfer of capital abroad by foreign investors and citizens which lead to capital flight',
	            		'Large amount of payments for foreign invisible items e.g. shipping, insurance, aviation and tourism',
	            		'Increased expenditure on foreign mission.'] };
	            	finalArray.push(fifth_object)

	            	Singlelist = document.querySelectorAll(".list_six");
            		list_one = [];
	            	Singlelist.forEach((elem) => {
	            		list_one.push(elem.value)
	            	});
	            	sixth_object = { answer_type: "list", mark: 3, answer: list_one, scheme: [
	            		'The total population of the country. If the total population is large, labour force will be large and vice versa',
	            		'The age distribution of the country’s population. If the population is youthful, labour force will be large and vice versa.', 
	            		'The official retirement age of workers. If this is low, labour force will be reduced and vice versa.',
	            		'The number of women who take up paid job. If this is large, labour force will be large and vice versa',
	            		'The school leaving age of students. If this is low, labour force will be large and vice versa',
	            		'The number of people who retire voluntarily before the official retirement age. If more people retire before the official retirement age, the labour force will be small and vice versa',
	            		'The number of disabled persons of working age. If this is quite large, labour force small and vice versa',
	            		'The number of people who pursue further studies after the school leaving age. If this is large then labour force will be small',
	            		'The number of persons in voluntary unemployment. If this is large, labour force will be small and vice versa',
	            		'The net migration. If the number of immigrants is higher than the number of emigrants the labour force will be large and vice versa']};
	            	finalArray.push(sixth_object)

	            	let others = [this.one, this.two, this.three, this.four, this.five, this.six, this.seven, this.eight, this.nine, this.ten, this.eleven, this.twelve, this.thirteen, this.fourteen]
	            	finalArray.push(...others);
	            	// console.log(finalArray)
	            	this.saveAssessment(finalArray)
	            },

	            saveAssessment($array)
	            {
	            	let gdp = document.querySelector('#gdp').value
	            	let gnp = document.querySelector('#gnp').value
	            	let nnp = document.querySelector('#nnp').value

	            	axios.post('api/submit', {
	            		payload: JSON.stringify($array), gdp: gdp, gnp: gnp, nnp: nnp,
	            		admission_number: this.admission_number,
	            	})
	            	.then( (response) => {
	            		if(!response.data.error)
	            		{
	            			window.location = "/login";
	            		}
	            		alert(response.data.message);
	            	})
	            	.catch( () => {
	            		alert("Unable to submit paper");
	            	})
	            },
	            timer()
			  	{
			       this.timervalues.minutes = Math.floor(this.timervalues.currentTime / 60)
			       this.timervalues.seconds  = (this.timervalues.currentTime % 60)
			       this.timervalues.currentTime =  this.timervalues.currentTime - 1
			       if (this.timervalues.minutes < 10) {
			          this.timervalues.minutes = "0"+ this.timervalues.minutes
			       }
			       if (this.timervalues.seconds < 10) {
			          this.timervalues.seconds = "0"+ this.timervalues.seconds
			       }
			       if (this.timervalues.currentTime > 0) {
			          this.timervalues.currentTime = this.timervalues.currentTime - 1
			       }else{
			          clearInterval()
			          this.submitPaper()
			       }
			   	}
	        }))
	    })
</script>
</html>