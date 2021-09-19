<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/NLGSite.css" /> <style type="text/css">
<!--
  A:link    { text-decoration: none; color: #000099}
  A:active  { text-decoration: none; color: #000099}
  A:visited { text-decoration: none; color: #000099}
  A:hover   { text-decoration: underline; color: #990099}
//-->
</style>

<script type="text/javascript">
<!--
function exp_coll(ind) {
  s = document.getElementById(ind);

  if (s.style.display == 'none') {
    s.style.display = 'block';
  } else if (s.style.display == 'block') {
    s.style.display = 'none';
  }
}
-->
</script>

<title>NL Seminar</title>

  </head>
<body text="#000033" link="#000099" vlink="#000099" alink="#000099">
<?php include('includes/usc-header.php'); ?><br><center><h2><b>USC/ISI NL Seminar</b></h2></center>
<?php include('includes/about.php'); ?>  <div class="nlheader"><h3>Upcoming talks:</h3></div>
<table width=90% border=0 cellspacing=1 cellpadding=4 bgcolor="#FFFFFF" align=center>
<tr class="seminarTableHeader"><td align=left width=14%>
    <b>Date</b>
  </td><td align=left width=25%>
    <b>Speaker</b>
  </td><td align=left>
    <b>Title</b>
  </td></tr>
<tr class="speakerItem" border=0 >
<td align=left valign=top>04 Oct 2011</td>
<td align=left valign=top>Steve DeNeefe</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs04_Oct_2011');">
Tree-adjoining Machine Translation (Ph.D. Defense Practice Talk)
</a><br>
<span id=abs04_Oct_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Machine Translation (MT) is the task of translating a document from asource language (e.g., Chinese) into a target language (e.g., English)via computer.  State-of-the-art statistical approaches to MT use largecollections of human-translated documents as training material,gathering statistics on the patterns of correspondence betweenlanguages according to the features specified by the translationmodel.  Using this bilingual translation model in conjunction with atarget language model, created by gathering statistics from a largemonolingual corpus, a new document in the source language can beautomatically translated into its target-language equivalent withsurprising accuracy.<p>Much  MT research focuses on types of the patterns and features toinclude in a translation model.Recent statistical MT models have used syntax trees to enforcegrammaticality, but the currently popular tree substitution modelsonly memorize sequences of words or constituents, specifying exactlywhat phrases to use and exactly what trees are grammatical, which doesnot generalize well.  Adding the operation of tree-adjoining providesthe freedom to splice additional information into an existinggrammatical tree.  An adjoining translation model allows general,linguistically-motivated translation patterns to be learned withoutthe clutter of endless variations of optional material.  Theappropriate modifiers, such as adjectives, adverbs, and prepositionalphrases, can be grafted into these core patterns as needed totranslate details.  We show that the increased generalization powerprovided by adjoining, when used carefully, improves MT qualitywithout becoming computationally intractable.<p>In this thesis, we describe challenges encountered by both word-sequence-basedand syntax-tree-based MT systems today, and present anin-depth, quantitative comparison of both models.  Then we describe anovel model for statistical MT which addresses these challenges usinga synchronous tree-adjoining grammar.  We introduce a method ofconverting these grammars to a weakly equivalent tree transducer fordecoding.   Then we present a method for learning the rules andassociated probabilities of this grammar from aligned tree/stringtraining data, and empirically analyze important characteristics ofthe resulting model, considering and evaluating many variations.Finally, our results show that adjoining delivers a consistentimprovement over a baseline statistical syntax-based MT model on bothmedium and large-scale MT tasks using several language pairs.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Oct 2011</td>
<td align=left valign=top>Ekaterina Ovchinnikova</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Oct_2011');">
Integration of World Knowledge for Natural Language Understanding
</a><br>
<span id=abs07_Oct_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Traditional inference-based natural language understanding (NLU) in acomputational framework suffered mainly from a lack of a sufficientlylarge knowledge base of commonsense knowledge. Recent advances havechanged this situation: A large amount of machine-readable knowledgeis now freely available to the community. This talk focuses onexploiting these developments to model large-scale NLU in aninference-based framework.<p>The three main types of the existing knowledge sources arelexical-semantic dictionaries, distributional resources, andontologies. After comparing these types of resources and outliningtheir differences, I will present an integrative knowledge basecombining lexical-semantic, ontological, and distributional knowledgein a modular way.<p>I will then talk about reasoning procedures able to make use of thelarge scale knowledge base. In particular, I will compare two mainforms of logical inferences applied to NLU: deduction and abduction.<p>In the last part of the talk, I will present experiments on thefollowing knowledge-intensive NLU tasks: recognizing textualentailment, semantic role labeling, and paraphrasing of noun-noundependencies.<br>
</font>
</span>
</td></tr></table><br><br>
 <div class="nlheader"><h3>Past talks:</h3></div>
<table width=90% border=0 cellspacing=1 cellpadding=4 bgcolor="#FFFFFF" align=center>
<tr class="seminarTableHeader"><td align=left width=14%>
  <b>Date</b>
</td><td align=left width=25%>
    <b>Speaker</b>
  </td><td align=left>
    <b>Title</b>
  </td></tr>
<tr class="speakerItem" border=0 >
<td align=left valign=top>30 Sep 2011</td>
<td align=left valign=top>Dirk Hovy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Sep_2011');">
Aligning Events and Time Stamps
</a><br>
<span id=abs30_Sep_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Machine Reading relies to a large extent on information about entities and events. While the definition of events is controversial, most people agree that they have certain properties like a time and a place.<p>We exploit this by trying to establish relations between events (such as ``bombing''  or ``election'') and temporal expressions that can be resolved to a timestamp, i.e., an expression like ``last Tuesday'' to an absolute value like 20110802.This enables a number of interesting applications, such as generation of absolute timelines, cross-document event coreference, and resolution of logical discrepancies.<p>We define a baseline approach and improve upon it by identifying important subproblems (within-sentence vs. across-sentence), casting them as a relation extraction problem and showing that classification with kernel methods works well in capturing the information. Our results are competitive with previous approaches and reach a F-score of 76.6.We also show that resolution across sentences is a lot harder and cannot be approached with the same techniques used for the within-sentence. We outline some promising findings and suggest further research.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Sep 2011</td>
<td align=left valign=top>Cerstin Mahlow (University of Zurich)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Sep_2011');">
Linguistically supported editing and revising: concept and prototypical implementation based on interactive NLP resources
</a><br>
<span id=abs16_Sep_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Composing, revising, and editing are highly demanding tasks. Even in polishedand published texts from professional writers we can observe errors and mistakes.For many errors, we can infer how they came to be: Word processors offercharacter-based functions only. These functions do not take into accountelements and structures of the language the author is using. Authors are thusforced to translate their high-level goals into long and complex sequencesof low-level character-based functions. Both the translation process and theexecution of such sequences of functions are error-prone.<p>However, in text editors for programmers ww find so-called language-awareediting functions. These functions operate on the elements and structures of aprogramming or mark-up language and help to avoid errors, as language-awarefunctions make revising and editing less tedious and error-prone.<p>We argue that the concept of language awareness can be transferred to writingnatural language texts using word processors. We propose functions that take thestructures of natural languages into consideration. We distinguish informationfunctions, movement functions, and operations to support revising and editing.The design is based on current findings from writing research.<p>Language-aware editing functions rely on the recognition and categorizationof relevant elements and structures with respect to a certain language. Weuse methods and resources from computational linguistics for morphologicalanalysis and generation, and for part-of-speech tagging. When evaluatingrespective resources we face a rather disappointing situation: NLP resourcesfor German are less suitable than assumed and less applicable for real-worldapplications than usually claimed in the literature.<p>Our prototypical implementation of language-aware functions for revising andediting of German texts serves as a proof of concept. The implementationillustrates opportunities and limits of current NLP resources for German.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 Sep 2011</td>
<td align=left valign=top>Richard Socher (Stanford University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_Sep_2011');">
Recursive Deep Learning in Natural Language Processing and Computer Vision
</a><br>
<span id=abs09_Sep_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Hierarchical and recursive structure is commonly found in differentmodalities, including natural language sentences and scene images.  Iwill present some of our recent work on three recursive neural networkarchitectures that learn meaning representations for such hierarchicalstructure. These models obtain state-of-the-art performance on severallanguage and vision tasks.<p>The meaning of phrases and sentences is determined by the meanings ofits words and the rules of compositionality. We introduce a recursiveneural network (RNN) for syntactic parsing which can learn vectorrepresentations that capture both syntactic and semantic informationof phrases and sentences. For instance, the phrases "declined tocomment" and "would not disclose" have similar representations.Since our RNN does not depend on specific assumptions for language, itcan also be used to find hierarchical structure in complex sceneimages. This algorithm obtains state-of-the-art performance forsemantic scene segmentation on the Stanford Background and the MSRCdatasets and outperforms Gist descriptors for scene classification by4%.<p>The ability to identify sentiments about personal experiences,products, movies etc. is crucial to understand user generated contentin social networks, blogs or product reviews. The second architectureI will talk about is based on semi-supervised recursive autoencoders (RAE).RAEs learn vector representations for phrases sufficiently well as tooutperform other traditional supervised sentiment classification methodson several standard datasets.Lastly, I describe an alternative unsupervised RAE model that can learnfeatures which outperform previous approaches for paraphrasedetection on the Microsoft Research Paraphrase corpus.<p>This talk presents joint work with Andrew Ng and Chris Manning.<p><p>Bio:Richard Socher is a Computer Science PhD student at Stanford,co-advised by Chris Manning and Andrew Ng.Most recently, he won the Yahoo! Key Scientific Challenges ProgramAward and the Distinguished Application Paper Award at ICML, 2011for his work on recursive deep learning.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Aug 2011</td>
<td align=left valign=top>Sravana Reddy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Aug_2011b');">
Cracking Running-Key Ciphers and Deciphering Speech (Interns Final Talk)
</a><br>
<span id=abs24_Aug_2011b style="display:none;">
<font size=-1>
<b>Time:</b> 2:30 pm - 3:00 pm<br>
<b>Location:</b> 4th Floor Large Conference Room [460]<br>
<b>Abstract:</b> In the first part of this talk, I will discuss our work on deciphering running-key ciphers, which are produced by encrypting the plaintext with a natural language string of the same length as the plaintext (the 'running key'). These ciphers are harder to crack than simple substitution ciphers, and no previous work has succeeded in decoding them.<p>The second part of the talk will address the problem of speech recognition without access to word pronunciations or annotated training data. The problem's motivations arise from languages and domains where pronunciation lexicons and transcribed speech are not available. Given a representation of the speech as a sequence of phonemes, and a language model from non-parallel text, we present methods to find the sequence of words correspoding to the speech input.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Aug 2011</td>
<td align=left valign=top>Xuchen Yao</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Aug_2011');">
Introducing context-dependent features into machine translation (Interns Final Talk)
</a><br>
<span id=abs24_Aug_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 2:30 pm<br>
<b>Location:</b> 4th Floor Large Conference Room [460]<br>
<b>Abstract:</b> One fundamental assumption in machine translation is that sentences are translated independently of each other. We attack this assumption by trying to achieve lexical translation consistence among sentences within the same document. An additional lexicon reuse feature is introduced to help the decoder select a more consistent translation. In this talk we will discuss the design of the reuse feature and show experimental results.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 Aug 2011</td>
<td align=left valign=top>Stephen Tratz (PhD defense practice talk)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_Aug_2011');">
Semantically-Enriched Parsing for Natural Language Understanding
</a><br>
<span id=abs19_Aug_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> This thesis details three contributions to the advancement ofsemantic-enriched parsing for English sentences: inventories of semanticrelations covering three semantically ambiguous linguistic phenomena,large datasets annotated according to the inventories, and, finally, asuite of tools for semantically-enriched parsing built using the data.For the purposes of this thesis, semantically-enriched parsing isdefined as the reconstruction of the underlying grammatical structure oftext along with shallow semantic annotation of semantically-ambiguousstructures. Ultimately, semantically-enriched parsing is one of the mostcritical steps in natural language understanding---the initial step inwhich the text is read by the machine into a knowledge representationfor further processing and reasoning.<p>The first contribution of this thesis is to advance the theoreticalfoundations for the interpretation of three ambiguous linguisticphenomena in English that have significant overlap in terms of therelations expressed: noun compounds, possessive constructions, andprepositions. For these, I define inventories of relations based uponextensive annotation by myself, previous work by others, andinter-annotator agreement studies. In the case of prepositions, therelations are created by refining an existing resource whereas the othertwo are created from scratch. In addition to mappings to prior work,mappings are provided across the different inventories in order tocreate a unified set of relations.<p>Second, I produce large datasets annotated according to theaforementioned sense inventories. Such data is vital for training mostautomatic tools and also provides exemplars for the theory embodied inthe inventories. Some of these datasets are created from scratch,including a collection of over 17,500 noun compounds and a collection ofover 21,900 possessive construction examples. In the case ofprepositions, an existing resource including over 24,000 annotatedexamples is refined.<p>The final contribution is a suite of tools that can constructsemantically-enriched parse trees. The suite is designed to work in asequential, pipeline-like fashion and can be thought of as consisting oftwo subsections. The first part reconstructs the grammatical structureof the text using a dependency parser that extends the non-directionaleasy-first algorithm developed by Goldberg and Elhadad (2010) in orderto support non-projective trees and is trained using my improveddependency tree conversion of the Penn Treebank. Second is a semanticannotation module that adds shallow semantic annotation for nouncompounds, preposition senses, and possessives. Combined, these toolsproduce semantically-enriched parse trees that include both grammaticalstructure and shallow semantics. The core parser itself achievesstate-of-the-art accuracy and can process over 75 sentences per second,which is substantially faster than most of the accurate parsersavailable today.<p>In conclusion, this thesis work provides significant contributions tocomputational linguistics, both in terms of theory and resources. Itadvances our understanding of the relations expressed by threesemantically-ambiguous linguistic phenomena, creates large annotateddatasets useful for machine learning, and produces a fast, accurate, andinformative system for semantically-enriched parsing.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Aug 2011</td>
<td align=left valign=top>Licheng Fang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Aug_2011');">
Structured Language Modelling for Machine Translation
</a><br>
<span id=abs17_Aug_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 2:30 pm<br>
<b>Location:</b> 4th Floor Large Conference Room [460]<br>
<b>Abstract:</b> Machine translation can potentially benefit from the guidance of alanguage model that evaluates translation candidates based on syntacticstructures. In this talk we are going to describe the summer project tobuild such an incremental structured language model that can be used inmachine translation systems that generate the target language in aleft-to-right manner. We will describe in detail our work in modelling,search, and parameter smoothing.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Aug 2011</td>
<td align=left valign=top>Dave Uthus</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Aug_2011');">
Overcoming Information Overload in Navy Chat
</a><br>
<span id=abs05_Aug_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 4th Floor Large Conference Room [460]<br>
<b>Abstract:</b> In this talk, I will describe the research we are undertaking at the Naval Research Laboratory which revolves around chat (such as Internet Relay Chat) and the problems it causes in the military domain. Chat has become a primary means for command and control communications in the US Navy. Unfortunately, its popularity has contributed to the classic problem of information overload. For example, Navy watchstanders monitor multiple chat rooms while simultaneously performing their other monitoring duties (e.g.,  tactical situation screens and radio communications). Some researchers have proposed how automated techniques can help to alleviate these problems, but very little research has addressed this problem.<p>I will give an overview of the three primary tasks that are the current focus of our research. The first is urgency detection, which involves detecting important chat messages within a dynamic chat stream. The second is summarization, which involves summarizing chat conversations and temporally summarizing sets of chat messages. The third is human-subject studies, which involves simulating a watchstander environment and testing whether our urgency detection and summarization ideas, along with 3D-audio cueing, can aid a watchstander in conducting their duties.<p>Short Bio: David Uthus is a National Research Council Postdoctoral Fellow hosted at the Naval Research Laboratory, where he is currently undertaking research focusing on analyzing multiparticipant chat. He received his PhD (2010) and MSc (2006) from the University of Auckland in New Zealand and his BSc (2004) from the University of California, Davis. His research interests include microtext analysis, machine learning, metaheuristics, heuristic search, and sport scheduling.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Jul 2011</td>
<td align=left valign=top>Markus Dreyer (SDL Language Weaver)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Jul_2011b');">
Discovering Morphological Paradigms from Plain Text Using a Dirichlet Process Mixture Model (EMNLP 2011 practice talk)
</a><br>
<span id=abs15_Jul_2011b style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We present an inference algorithm that organizes observedwords (tokens) into structured inflectional paradigms (types). Italso naturally predicts the spelling of unobserved forms that aremissing from these paradigms, and discovers inflectionalprinciples (grammar) that generalize to wholly unobserved words.Our Bayesian generative model of the data explicitly representstokens, types, inflections, paradigms, and locally conditionedstring edits. It assumes that inflected word tokens are generatedfrom an infinite mixture of inflectional paradigms (stringtuples). Each paradigm is sampled all at once from a graphicalmodel, whose potential functions are weighted infinite-statetransducers with language-specific parameters to be learned. Theseassumptions naturally lead to an elegant empirical Bayesinference procedure that exploits Monte Carlo EM, beliefpropagation, and dynamic programming. Given 50-100 seedparadigms, adding a 10-million-word corpus reduces predictionerror for morphological inflections by up to 10%.<p>This is joint work with Jason Eisner, JHU.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Jul 2011</td>
<td align=left valign=top>Jonathan May (SDL Language Weaver)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Jul_2011');">
Tuning as Ranking (EMNLP 2011 practice talk)
</a><br>
<span id=abs15_Jul_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We offer a simple, effective, and scalable method for statisticalmachine translation parameter tuning based on the pairwise approach toranking. Unlike the popular MERT algorithm, our pairwise rankingoptimization (PRO) method is not limited to a handful of parametersand can easily handle systems with thousands of features. Moreover,unlike recent approaches built upon the MIRA algorithm of Crammer andSinger, PRO is easy to implement. It uses off-the-shelf linear binaryclassifier software and can be built on top of an existing MERTframework in a matter of hours. We establish PRO's scalability andeffectiveness by comparing it to MERT and MIRA and demonstrate parityon both phrase-based and syntax-based systems in a variety of languagepairs, using large scale data scenarios.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Jul 2011</td>
<td align=left valign=top>Deniz Yuret (Koc University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Jul_2011');">
The Noisy Channel Model for Unsupervised Word Sense Disambiguation
</a><br>
<span id=abs07_Jul_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We introduce a generative probabilistic model, the noisychannel model, for unsupervised word sense disambiguation. In ourmodel, each context C is modeled as a distinct channel through whichthe speaker intends to transmit a particular meaning S using apossibly ambiguous word W. To reconstruct the intended meaning thehearer uses the distribution of possible meanings in the given contextP(S|C) and possible words that can express each meaning P(W|S). Weassume P(W|S) is independent of the context and estimate it usingWordNet sense frequencies. The main problem of unsupervised WSD isestimating context dependent P(S|C) without access to any sense taggedtext. We show one way to solve this problem using a statisticallanguage model based on large amounts of untagged text. Our model usescoarse-grained semantic classes for S internally and we explore theeffect of using different levels of granularity on WSD performance.The system outputs fine grained senses for evaluation and itsperformance on noun disambiguation is better than most previouslyreported unsupervised systems and close to the best supervisedsystems.<p>Short Bio: Deniz Yuret is an assistant professor in Computer Engineering at Koc University in Istanbul. Previously he was at the MIT AI Lab and laterco-founded Inquira, Inc. His research is on lexical semantics andunsupervised approaches to parsing and disambiguation. Currently he isone of the organizers of the SemEval3 semantic evaluation exercise,co-chair for the ACL 2011 semantics area, and an editor for theComputational Linguistics Journal.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>28 Jun 2011</td>
<td align=left valign=top>Suzy Howlett (Macquarie University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs28_Jun_2011');">
Confidence in Syntax for Statistical Machine Translation
</a><br>
<span id=abs28_Jun_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Phrase-based statistical machine translation typically uses no syntactic information during translation, but while this information intuitively seems useful, including it has not necessarily helped translation performance. My PhD project is looking at this problem in the context of a syntactically-informed reordering preprocessing step prior to phrase-based translation. My work so far has shown that this preprocessing step does not necessarily improve performance when applied to every sentence; in my project I aim to develop a lattice-based system, armed with a number of syntax-based confidence features, that can choose on a sentence-by-sentence basis whether to use the reordering. In this presentation I will outline my progress so far, and welcome feedback and suggestions, particularly with respect to features to consider.<p>Short Bio:Suzy Howlett is a PhD student at the Centre for Language Technology at Macquarie University, Australia, under the supervision of Mark Dras. She studied computer science and linguistics as an undergraduate at the University of Sydney, finishing in 2008 with an Honours year with James Curran, looking at automatically annotating additional training data for the C&C statistical CCG parser.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Jun 2011</td>
<td align=left valign=top>Sravana Reddy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Jun_2011b');">
Unsupervised Discovery of Rhyme Schemes (ACL practice talk)
</a><br>
<span id=abs17_Jun_2011b style="display:none;">
<font size=-1>
<b>Time:</b> 3:40 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We describe an unsupervised, language-independent model for finding rhyme schemes in poetry, using no prior knowledge about rhyme or pronunciation.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Jun 2011</td>
<td align=left valign=top>Xuchen Yao</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Jun_2011');">
Nonparametric Bayesian Word Sense Induction (ACL practice talk)
</a><br>
<span id=abs17_Jun_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:40 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We propose the use of a nonparametric Bayesian model, the Hierarchical Dirichlet Process (HDP), for the task of Word Sense Induction. Results areshown through comparison against Latent Dirichlet Allocation (LDA), a parametric Bayesian model employed by Brody and Lapata (2009) for this task.We find that the two models achieve similar levels of induction quality, while the HDP confers the advantage of automatically inducing a variable number of senses per word, as compared to manually fixing the number of senses a priori, as in LDA. This flexibility allows for the model to adapt to terms with greater or lesser polysemy, when evidenced by corpus distributional statistics.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Jun 2011</td>
<td align=left valign=top>Cartic Ramakrishnan</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Jun_2011');">
The Role of Information Extraction in the Design of a Document Triage Application for Biocuration
</a><br>
<span id=abs10_Jun_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Traditionally, automated triage of papers is performed using lexical (unigram, bigram, and sometimes trigram) features.  This talkexplores the use of information extraction (IE) techniques to create richer linguistic features than traditional bag-of-words models. Ourclassifier includes lexico-syntactic patterns and more-complex features that represent a pattern coupled with its extracted noun,represented both as a lexical term and as a semantic category. Our experimental results show that the IE-based features can improve performance over unigram and bigram features alone. We present intrinsic evaluation results of full-text document classification experiments to determine automatically whether a paper should be considered of interest to biologists at the Mouse Genome Informatics (MGI) system at the Jackson Laboratories. We also further discuss issues relating to design and deployment of our classifiers as an application to support scientific knowledge curation at MGI.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 May 2011</td>
<td align=left valign=top>Shu Cai</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_May_2011');">
Language-Independent Parsing with Empty Elements
</a><br>
<span id=abs27_May_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We present a simple, language-independent method for integrating recovery of empty elements into syntactic parsing. This method outperforms the best published method we are aware of on English and a recently published method on Chinese.<p>This is a joint work with David Chiang and Yoav Goldberg<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>06 May 2011</td>
<td align=left valign=top>Abe Kazemzadeh (USC)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs06_May_2011');">
Natural Language Descriptions of Emotions
</a><br>
<span id=abs06_May_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> This proposal seeks to explain how humans describe emotions usingnatural language. Thefocus of the proposal is on words and phrases that refer to emotions,rather than the more general phenomena of emotional language. The mainproblem I address is that if natural language descriptions of emotionsrefer to abstract concepts that are local to a particular human (oragent), then how do these concepts vary from person to person and howcan shared meaning be established between people. The thesis of theproposal is that naturallanguage emotion descriptions are definite descriptions that refer totheoretical objects, which provide a logical framework for dealingwith this phenomenon in scientific experimentsand engineering solutions. An experiment, Emotion Twenty Questions(EMO20Q), was devised to study the social natural language behavior ofhumans, who must use descriptions of emotions to play the familiargame of twenty questions when the unknown word is an emotion.The idea of a theory based on natural language propositions isdeveloped and used to formalize the knowledge of a sign-using agent.Based on this pilot data, it was seen that approximately 25% of theemotion descriptions referred to emotions as objects with dimensionalattributes, similarity, or subsethood. This motivated the author touse interval type-2 fuzzy sets as a computational model for theconceptual meaning of emotion descriptions. This model introduces adefinition of a variable that ranges over emotions and allows for bothinter- and intra-subject variability. A second experiment usedinterval surveys and translation tasks to assess this model. Finally,the author proposes the use of spectral graph theory to representemotional knowledge as a network of proposition nodes that areconnected  to emotion nodes based on data from EMO20Q.<p>Short Bio: Abe Kazemzadeh is a PhD student at the USC Computer Science Dept and aresearch assistant at the the Signal Analysis and InterpretationLaboratory (SAIL). His interests include natural language, logic,emotions, games, and algebra.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>29 Apr 2011</td>
<td align=left valign=top>Marie-Catherine de Marneffe (Stanford University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs29_Apr_2011');">
Computational models of utterance meaning
</a><br>
<span id=abs29_Apr_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Much of the meaning conveyed in language use goes beyond the literal meaning of the words. Suppose someone asks whether I want to go for lunch, and I reply: "I had a very large breakfast". The utterance does not convey only what it literally means, my interlocutor is probably going to infer that I am not hungry and do not want to go for lunch now. Computational systems today understand at most the literal meaning of human language utterances. I aim at capturing aspects of utterance meaning, the kind of information that a reader will reliably extract from an utterance within text.<p>The first part of the talk concentrates on interpreting answers to yes/no questions which do not straightforwardly convey a 'yes' or 'no' answer. I focus on questions involving scalar modifiers (Was it acceptable? It was unprecedented.) and numerical answers (Are you kids little? I have a 10 year-old and a 7 year-old.). I exploit the availability of large amount of text to learn meanings from words and sentences in real context. I show that we can ground scalar modifier meaning based on large unstructured databases, and that such meanings can drive pragmatic inference.<p>The second part of the talk targets veridicality -- whether a speaker intends to convey that the events described are actual, non-actual or uncertain -- which is central to language understanding, but little used in relation and event extraction systems. What do people infer from a sentence such as FBI agents alleged in court documents today that Zazi had admitted receiving weapons and explosives training from al Qaeda operatives? Did Zazi received weapons and explosives training? I show that not only lexical semantic properties but context and world knowledge shape veridicality judgments. Since such judgments are not always categorical, I suggest they should be modeled as distributions, and propose a classifier to do so. The classifier features provide a nuanced picture of the diverse factors that affect veridicality.<p>Short Bio:Marie-Catherine de Marneffe is a fifth-year PhD student in Linguistics at Stanford University. Prior to herdoctoral studies, she visited the Stanford NLP research group for 2 years, working with Christopher D. Manning.In 2000, she received her master degree in Classical Languages, and a master in Computer Science in 2002,both from the Université catholique de Louvain (Belgium). Her work in computational semantics focuses onon detecting entailment and contradiction in texts, grounding meaning from large unstructured databases, and assessing the information status of events from a reader's perspective. She is also interested in language acquisition, studying howchildren acquire verb forms in French.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Apr 2011</td>
<td align=left valign=top>Dirk Hovy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Apr_2011');">
Models and Training for Unsupervised Preposition Sense Disambiguation
</a><br>
<span id=abs22_Apr_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We present a preliminary study on unsupervised preposition sense disambiguation (PSD), comparing different models and training techniques (EM, MAP-EM with L0 norm, Bayesian inference using Gibbs sampling). To our knowledge, this is the ﬁrst attempt at unsupervised preposition sense disambiguation. Ultimately, we want to disambiguate prepositions not by and for themselves, but in the context of sequential semantic labeling. This should also improve disambiguation of the words linked by the prepositions (here, morning, shopped, and Rome). We propose using unsupervised methods in order to leverage unlabeled data, since, to our knowledge, there are no annotated data sets. Our best accuracy for PSD reaches 56%, a signiﬁcant improvement (at p < .001) of 16% over the most-frequent-sense baseline.<p>This is a joint work with Ashish Vaswani, Stephen Tratz, David Chiang, and Eduard Hovy<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Apr 2011</td>
<td align=left valign=top>Thomas Schoenemann</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Apr_2011');">
Computing Viterbi Alignments via Integer Linear Programming
</a><br>
<span id=abs15_Apr_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> This talk is about an optimization problem that was shown to beNP-hard: computing optimal alignments for the IBM-3 translationmodel. I will show that in practice it can be solved quite efficientlyvia Integer Linear Programming. In addition to using a standard solverI will also show problem-specific preprocessing techniques: byderiving upper and lower bounds, a large number of variables can beremoved from the start.<p>Short Bio: Thomas Schoenemann was born and grew up in Germany. He studiedComputer Science at RWTH Aachen, Germany, where he got a diploma in2005, having written his diploma thesis on the topic of confidencemeasures in machine translation in the group of HermannNey. Afterwards he went to the University of Bonn, Germany, to do hisPh.D. thesis in computer vision in the years 2006-2008. Up to a monthago he was a postdoc in the vision group at Lund University, Sweden,where he also resumed his work on translation. Currently he is takinga time off to explore other fields and broaden his scope.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 Mar 2011</td>
<td align=left valign=top>Sujith Ravi (PhD defense practice talk)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_Mar_2011');">
Deciphering Natural Language
</a><br>
<span id=abs18_Mar_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Most state-of-the-art techniques used in natural language processing (NLP) are supervised and require labeled training data. For example, statistical language translation requires huge amounts of bilingual data for training translation systems. But such data does not exist for all language pairs and domains. Using human annotation to create new bilingual resources is not a scalable solution. This raises a key research challenge: How can we circumvent the problem of limited labeled resources for NLP applications? Interestingly, cryptanalysts and archaeologists have tackled similar challenges in solving "decipherment problems".<p>This thesis work aims to bring together techniques from classical cryptography, NLP and machine learning. We introduce a novel approach called "natural language decipherment" that can solve natural language problems without labeled (parallel) data. In this talk, we show how a wide variety of NLP problems can be formulated as decipherment tasks---for example, in statistical language translation one can view the foreign-language text as a cipher for English. Instead of relying on parallel training data, decipherment uses knowledge of the target language (e.g., English) and large quantities of readily available monolingual source (cipher) data to induce bilingual connections between the source and target languages. Using decipherment techniques, we make headway in attacking a hierarchy of problems ranging from letter substitution decipherment to sequence labeling problems (such as part-of-speech tagging) to language translation. Along the way, we make several key contributions---novel unsupervised algorithms that search for minimized models during decipherment and achieve state-of-the-art results on a number of important natural language tasks. Unlike conventional approaches, these decipherment methods can be easily extended to multiple domains and languages (especially resource-poor languages), thereby helping to spread the impact and benefits of NLP research.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Mar 2011</td>
<td align=left valign=top>Cosmin Adrian Bejan (ICT)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Mar_2011');">
Nonparametric Bayesian Models for Clustering Feature-Rich Linguistic Objects
</a><br>
<span id=abs11_Mar_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> In this talk, I will present how a new class of unsupervised,nonparametric Bayesian models can be effectively applied to solve real data applications that involve clustering feature-rich linguistic objects.<p>First, I will describe a generalization of the hierarchical Dirichletprocess model to account for additional properties associated withobservable objects. In addition, to overcome some of the limitations ofthis new model, I will then describe a new hybrid model which combinesan infinite latent class model with a discrete time series model. Themain advantages of this hybrid model are the abilities to representa potentially infinite number of features associated with observableobjects and to perform an automatic selection of the most salientfeatures.  Furthermore, all the models described in this talk aredesigned to account for a potential number of categorical outcomes.The evaluation performed for solving both within- and cross documentevent coreference shows significant improvements of the models whencompared against three baselines for this task.<p>Short Bio:Cosmin Adrian Bejan is a postdoctoral researcher at the USC Institutefor Creative Technologies, where he is currently working on applicationsthat involve extraction and analysis of commonsense knowledge from largecollections of text documents. His research interests include eventsemantics, semantic parsing, commonsense causal reasoning, unsupervised learning, and nonparametric Bayesian methods.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>04 Mar 2011</td>
<td align=left valign=top>Steve DeNeefe (practice job talk)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs04_Mar_2011');">
Tree Adjoining Machine Translation
</a><br>
<span id=abs04_Mar_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 4:30 pm - 5:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Tree adjoining grammars (TAGs) have greater linguistic expressiveness than the tree substitution grammars used in many natural language tasks, but are typically considered too complex or computationally expensive for practical systems.  Many current statistical machine translation (MT) models use tree substitution to memorize sequences of words or constituents, specifying exactly what phrases to use or exactly what trees are grammatical.  Adding the operation of tree adjoining provides the freedom to splice additional information into an existing grammatical tree.  An adjoining translation model allows general, linguistically-motivated translation patterns to be learned without the clutter of endless variations of optional material.  The appropriate modifiers, such as adjectives, adverbs, and prepositional phrases, can later be grafted in as needed to translate details.  We show that the increased generalization power provided by adjoining, when used carefully, improves MT quality without becoming computationally intractable.<p>In this talk, we describe challenges encountered by phrase-based and syntax-based MT systems today, and present an in-depth, quantitative comparison of both models.  Then, we describe a novel model for statistical MT which addresses these challenges using a synchronous tree adjoining grammar.  We introduce a method of converting these grammars to a weakly equivalent tree transducer for decoding.   Then we present a method for learning the rules and associated probabilities of this grammar from aligned tree/string training data.<p>Finally, our results show that adjoining delivers a consistent improvement over a baseline statistical syntax-based MT model on both medium and large-scale MT tasks using several language pairs.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>03 Mar 2011</td>
<td align=left valign=top>Christopher Thomas (Wright State University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs03_Mar_2011');">
What Goes Around Comes Around -- Improving the State of Knowledge on the Web through On-Demand Model Creation
</a><br>
<span id=abs03_Mar_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Information extraction is concerned with the retrieval of structured information from unstructured sources. Knowledge extraction/acquisition will need to go a step further by testing whether the extracted information is actually true. Since none of the extraction systems in current use can guarantee a perfect precision, it is necessary to incorporate manual verification steps into the information extraction pipeline in order to use extracted facts in further reasoning. My talk will present a framework that adopts a cyclic approach to advancing the state of factual knowledge within a system, taking advantage of available formal/structured knowledge sources, information extraction and human/social computing to verify the extracted information. For the fact extraction part, the system uses LoD as training data, a domain hierarchy extractor to delineate domain boundaries and non-NLP surface-pattern-based open IE techniques to connect concepts within the hierarchy. To combat the low recall that most IE approaches face, the system deploys generalization techniques and pertinence computation to increase the number of patterns. Verification is done by means of information use under the assumption that correct information will be utilized more often than incorrect one.<p>Bio:Christopher Thomas is a PhD candidate in the Kno.e.sis Center at Wright State University. His research is in epistemological aspects of Computer Science and Artificial intelligence, namely knowledge extraction, representation, verification and dissemination. To build a coherent framework for this kind of systems epistemology, his publications span technical work on ontology design, ontology learning, information quality and information extraction as well as conceptual work on knowledge representation and social computing methods for knowledge verification.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Feb 2011</td>
<td align=left valign=top>Alan Ritter (University of Washington)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Feb_2011');">
Status Messages: A Unique Textual Source of Realtime and Social Information
</a><br>
<span id=abs17_Feb_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Recently there has been an explosion in the number of users posting short status messages on Social Media websites such as Facebook and Twitter.  Although noisy and informal, this new style of text represents a valuable source of information not available elsewhere: it provides the most up-to-date information on current events, in addition to a massive publicly available corpus of naturally occurring human conversations.  In this talk I will present ongoing work which explores both of these aspects.<p>First, I will describe efforts towards Information Extraction from status messages.  Because statuses can be posted quickly and are widely disseminated, they often provide the most up-to-date source of information on current events around the world and locally.  This dynamically changing source of realtime information is already being processed using keyword extraction techniques, for example the "trends" displayed on Twitter's website provide a list of phrases which are frequent in the current stream of messages.  In order to move beyond a flat list of phrases, we have been investigating the feasibility of applying Information Extraction techniques to produce more structured representations of events.  A key challenge is the noisy nature of this data; unlike newswire, or biomedical text, status messages contain frequent misspellings and abbreviations, inconsistent capitalization, unique grammar, etc...  To deal with these issues, we have been annotating a corpus of Twitter Posts with POS tags and Named Entities, then using these annotations to train Twitter-specific NLP tools.  As a demonstration of their utility, the resulting tools are combined to produce a calendar of popular events occurring in the future.<p>In addition, I will discuss work which exploits a corpus of roughly 1.3 million naturally occurring conversations collected from Twitter for building models of human conversation.  Three data-driven approaches to generating responses to Twitter status posts are considered, based on either information retrieval or phrase-based statistical machine translation.  Although there are many challenges to overcome in adapting phrase-based SMT to dialogue, we show that it is a promising approach to this problem.  We compare these approaches in a human evaluation, using annotators from Amazon's Mechanical Turk service.  Furthermore, we measure agreement between human evaluators and the BLEU automatic MT evaluation metric.  As far as we are aware, this is the first work to investigate the application of phrase-based SMT to dialogue generation.<p>Short Bio: Alan Ritter is a graduate student at the University of Washington advised by Oren Etzioni.  His research interests are in Information Extraction, Computational Lexical Semantics, and Language Processing in Social Media.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Feb 2011</td>
<td align=left valign=top>Hagen Fuerstenau (University of Saarland)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Feb_2011');">
Learning Structured Semantics under Weak Supervision
</a><br>
<span id=abs14_Feb_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 11:00 am - 12:00 pm<br>
<b>Location:</b> 4th Floor Large Conference Room [460]<br>
<b>Abstract:</b> In this talk I will present recent work on two topics: syntactically structured representations of word meaning in context and semi-supervised semantic role labeling.  These will be presented as two instances of a general theme: acquiring structured meaning representations with little or no manual annotation.<p>Vector space models have become a standard way of representing word meaning that can be learned in an unsupervised way.  The problem of polysemy, however, has only recently been addressed within this framework.  Several approaches to derive vector representations of words in specific sentential contexts have been proposed.  I will present recent work on extending such contextualization operations to vector models incorporating rich syntactic structure, achieving significant improvements in context-dependent lexical substitution tasks.<p>Going beyond the meaning of single words, I will then turn to work on semantic role labeling.  Here, a key obstacle is the annotation effort required for the training of high quality role labeling systems.  I will present a semi-supervised approach to semantic role labeling, based on generalizing semantic annotations from manually labeled seed sentences to unlabeled sentences via structural alignments, yielding significant improvements in role labeling performance.<p>I will conclude my talk with an outlook onto how the search for adequate models of semantics may profit from formulation in task-specific ways. In particular, I will sketch some ideas on structured semantic models for statistical machine translation.<p>Bio: Hagen Fürstenau is a researcher at Saarland University, Germany.  Hereceived an M.Sc. in Mathematics from Bonn University and is about tofinish his Ph.D. in Computational Linguistics.  His research interestsinclude data-driven methods in computational semantics and weaklysupervised machine learning.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Feb 2011</td>
<td align=left valign=top>Hui Zhang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Feb_2011');">
Joint Word Alignment and Synchronous Grammar Induction
</a><br>
<span id=abs11_Feb_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 4th Floor Large Conference Room [460]<br>
<b>Abstract:</b> Synchronous grammars have been shown to be effective as models of translation, and the performance of such systems depends heavily on the quality of the grammar induced from the training data. The standard method for induction of synchronous grammars uses automatic word alignments to constrain possible derivations, which makes them prey to alignment errors. In this work, we propose a method for joint word alignment and grammar induction. Our experiments show that our method significantly outperforms the standard method, while reducing the size of the grammar by more than half.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>04 Feb 2011</td>
<td align=left valign=top>Stephan Gouws (Stellenbosch University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs04_Feb_2011');">
Measuring Conceptual Similarity by Spreading Activation over Wikipedia's Hyperlink Graph
</a><br>
<span id=abs04_Feb_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> The World Wide Web brought with it an unprecedented level ofinformation overload. Computers are very effective at processing andclustering numerical and binary data, however, the automated conceptualclustering of natural-language data is considerably harder to automate.Many techniques rely on relatively simple keyword-matching techniques orprobabilistic methods to measure semantic relatedness between words anddocuments. However, these approaches do not always accurately captureconceptual relatedness as measured by humans.<p>In this talk I'll briefly discuss a novel use of spreading activation(SA) techniques (primarily from cognitive science) for computingsemantic relatedness between words and/or documents. This is done bymodelling the article hyperlink structure of Wikipedia as an associativenetwork structure for knowledge representation. The SA technique isadapted and several problems are addressed for it to function over thederived Wikipedia hyperlink graph. We evaluate these approaches overstandard document similarity datasets and by user evaluationexperiments, and achieve results which compare favourably with state ofthe art methods.<p>By making use of the collaboratively-created resource Wikipedia, wehereby also overcome a significant problem in making use of spreadingactivation based techniques for information retrieval up to now, asnoted by Crestani (1997): "The problem of building a network whicheffectively represents the useful relations [between concepts] hasalways been the critical point of many of the attempts to use SA in IR.These networks are very difficult to build, to maintain and keep up todate.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>28 Jan 2011</td>
<td align=left valign=top>Markus Dreyer (SDL Language Weaver, formerly @ Johns Hopkins)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs28_Jan_2011');">
A Non-Parametric Model for the Discovery of Inflectional Paradigms from Plain Text using Graphical Models over Strings
</a><br>
<span id=abs28_Jan_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Statistical natural language processing can be difficult formorphologically rich languages. The observed vocabularies of suchlanguages are very large, since each word may have been inflected formorphological properties like person, number, gender, tense, orothers. This unfortunately masks important generalizations, leads toproblems with data sparseness and makes it hard to generate correctlyinflected text.<p>The presented dissertation work tackles the problem of inflectional morphology with a novel, unified statistical approach.  We present a generative probabilitymodel that can be used to learn from plain text how the words of alanguage are inflected, given some minimal supervision. In otherwords, we discover the inflectional paradigms that are implicit, orhidden, in a large unannotated text corpus.<p>This model consists of several components: a hierarchical Dirichletprocess clusters word tokens of the corpus into lexemes and theirinflections, and graphical models over strings -- a novelgraphical-model variant -- model the interactions of multiplemorphologically related type spellings, using weighted finite-statetransducers as potential functions.<p>We present the components of this model, from (1) weightedfinite-state transducers parameterized as log-linear models, to (2)graphical models over multiple strings, to (3) the final Bayesiannon-parametric model over a corpus, its lexemes, inflections, andparadigms. These three components of the model correspond to thecombined use of (1) dynamic programming, (2) belief propagation and(3) MCMC for inference.<p>We show experimental results for several tasks along the way,including a lemmatization task in multiple languages and, todemonstrate that parts of our model are applicable outside ofmorphology as well, a transliteration task. Finally, we show thatlearning from large unannotated text corpora under our non-parametricmodel significantly improves the quality of predicted wordinflections.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Jan 2011</td>
<td align=left valign=top>Donald Metzler</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Jan_2011');">
Relevance and Ranking in Online Dating Systems
</a><br>
<span id=abs14_Jan_2011 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Match-making systems refer to systems where users want to meet other individuals to satisfy some underlying need. Examples of match-making systems include dating services, resume/job bulletin boards, community based question answering, and consumer-to-consumer marketplaces. One fundamental component of a match-making system is the retrieval and ranking of candidate matches for a given user.We present the first in-depth study of information retrieval approaches applied to match-making systems. Specifically, we focus on retrieval for a dating service. This domain offers several unique problems not found in traditional information retrieval tasks. These include two-sided relevance, very subjective relevance, extremely few relevant matches, and structured queries. We propose a machine learned ranking function that makes use of features extracted from the uniquely rich user profiles that consist of both structured and unstructured attributes. An extensive evaluation carried out using data gathered from a real online dating service shows the benefits of our proposed methodology with respect to traditional match-making baseline systems. Our analysis also provides deep insights into the aspects of match-making that are particularly important for producing highly relevant matches.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Nov 2010</td>
<td align=left valign=top>Jason Riesa</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Nov_2010');">
Structured Models for Bilingual Alignment (Ph.D. Proposal practice talk)
</a><br>
<span id=abs15_Nov_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 4th Floor Conference Room [460]<br>
<b>Abstract:</b> Bilingual alignment serves as an integral step and the foundation inthe building of any state-of-the-art statistical machine translationsystem. It enables us to automatically learn and extract translationrules from hundreds of millions of words of bilingual text.<p>Twenty years ago, the research area of machine translation wasbeginning to make use of the increasing availability and speed ofcomputing resources demanded by the ideas of a previous generation,notably Weaver (1949). The IBM translation models -- statisticalmodels for automatic word-to-word translation (Brown et al., 1990;Brown et al., 1993) - spurred a flurry of new statistical andempirical research in this area. They have become ubiquitous in thefield and are easy to train in an unsupervised fashion; Al-Onaizan etal. (1999) and Och and Ney (2003) have given us open-source toolkitsfor this purpose.<p>However, there are many problems that still exist. The work presentedin this thesis proposal will eliminate many of the problems withalignment systems that have persisted for two decades, significantly improving machine translationquality and decidedly advancing the state-of-the-art. In achievingthis goal, we develop new models of bilingual alignment and efficientsearch algorithms for working with such models.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>12 Nov 2010</td>
<td align=left valign=top>Stephen Tratz</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs12_Nov_2010');">
Semantically-enriched Parsing for Natural Language Understanding (Ph.D. Proposal practice talk)
</a><br>
<span id=abs12_Nov_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Natural language is riddled with many ambiguities, greatly complicatingnatural language processing tasks. Current parsers reconstruct thesyntax of sentences without addressing the numerous ambiguities oflanguage. This talk discusses a proposed solution forsemantically-enriched parsing that consists of ontological resources,datasets, and tools that can be used to produce more informative parsesof English sentences. The resulting parses consist not only of syntacticstructure, but also semantic interpretations for noun compounds,preposition senses, and possessive constructions.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Oct 2010</td>
<td align=left valign=top>Anselmo Penas</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Oct_2010');">
Toward a Reading Machine
</a><br>
<span id=abs07_Oct_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Machine Reading (MR) aims at bridging the gap between texts and a formal representation that a reasoning system can use to make inferences about the text. In the MR Program (MRP), the target ontology is given and the inferences are oriented to answer queries about a set of textual documents. Traditionally, this setting is approached by Information Extraction engines that use annotated texts to learn the mapping between the text and the entity classes and relations of the target ontology. However, in the current MRP setting, almost no annotated data is given, and the systems are expected to adapt to a new domain in a very short time. This setting introduces the need to develop new architectures able to learn from previous readings (of unannotated texts) and to leverage as much as possible the small amount of annotated data. The talk will report the current development of a system with these features.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Oct 2010</td>
<td align=left valign=top>Eduard Hovy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Oct_2010');">
Toward a Computational Theory of Semantic Content
</a><br>
<span id=abs05_Oct_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Semantics has been the object of deep study for many years. Yet representation of content—the actual meaning of the symbols used in semantic propositions—is curiously absent from most of this work. This talk argues that this is so because the most useful way of conceptualizing content is not in the form of symbols but as statistical word(sense) distributions, suitably organized.  Over the past few years, NLP research has increasingly treated topic signature word distributions (also called 'context vectors', 'topic models', 'language models', etc.) as a de facto replacement for semantics at various levels of granularity. Whether the task is wordsense disambiguation, certain forms of textual entailment, information extraction, paraphrase learning, and so on, it turns out to be very useful to consider a semantic unit as being defined by the distribution of word(senses) that regularly accompany it (in the classic words of Firth, "you shall know a word by the company it keeps"). This is true for semantic units of all sizes, from individual word(sense)s to sentences to text collections; the information learned and used by WSD engines closely resembles that learned by LDA and similar topic characterization engines.<p>In this talk I argue for a new kind of semantics, which is combines traditional symbolic logic-based proposition-style semantics of the kind used in older NLP with (computation-based) statistical word distribution information (what is being called Distributional Semantics in modern NLP). The core resource is a single lexico-semantic 'lexicon' that can be used for a variety of tasks provided it is reformulated appropriately. I show how to define such a lexicon, how to build and format it, and how to use it for various tasks. The talk pulls together a wide range of related topics, including Pantel-style resources like DIRT, inferences / expectations such as those used in Schank-style expectation-based parsing and expectation-driven NLU, PropBank-style word valence lexical items, and the treatment of negation and modalities.<p>Combining the two views of semantics seems promising but opens many questions that need study, including the operation of logical operators such as negation and modalities over word(sense) distributions, the nature of ontological facets required to define concepts, and the action of compositionality over statistical concepts.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>01 Oct 2010</td>
<td align=left valign=top>Liang Huang and Haitao Mi</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs01_Oct_2010b');">
Efficient Incremental Decoding for Tree-to-String Translation (EMNLP 2010 Practice Talk)
</a><br>
<span id=abs01_Oct_2010b style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Syntax-based translation models should in principle be efficient with polynomially-sized search space, but in practice they are often embarassingly slow, partly due to the cost of language model integration. In this paper we borrow from phrase-based decoding the idea to generate a translation incrementally left-to-right, and show that for tree-to-string models, with a clever encoding of derivation history, this method runs in average case polynomial-time in theory, and linear-time with beam search in practice (whereas phrase-based decoding is exponential-time in theory and quadratic-time in practice). Experiments show that, with comparable translation quality, our tree-to-string system (in Python) can run more than 30 times faster than the phrase-based system Moses (in C++).<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>01 Oct 2010</td>
<td align=left valign=top>Erica Greene</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs01_Oct_2010');">
Automatic Analysis of Rhythmic Poetry with Applications to Generation and Translation (EMNLP 2010 Practice Talk)
</a><br>
<span id=abs01_Oct_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We employ statistical methods to analyze, generate, and translate rhythmic poetry. We first apply unsupervised learning to reveal word-stress patterns in a corpus of raw poetry. We then use these word-stress patterns, in addition to rhyme and discourse models, to generate English love poetry. Finally, we translate Italian poetry into English, choosing target realizations that conform to desired rhythmic patterns.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Aug 2010</td>
<td align=left valign=top>Yoav Goldberg</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Aug_2010b');">
Intern Final Talk: Small is beautiful. Is it any good?
</a><br>
<span id=abs27_Aug_2010b style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> This talk summarizes our experience with searching for small modelsfor syntax-based machine translation.  I will first present casessuggesting that smaller models are desirable, and present someevidence that minimizing model size is a reasonable objectivefunction.  I will then show cases where this objective may be tooaggressive.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Aug 2010</td>
<td align=left valign=top>Sasha Rush</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Aug_2010');">
Intern Final Talk: Large-scale, High-dimensional, Discriminative Machine Translation
</a><br>
<span id=abs27_Aug_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> This talk summarizes my summer work on scaling a machine translationsystem to train on a large data set. Similar system are tuned withMERT on 1k sentences, we train a CRF on 100k sentences. I will discusstechniques for training, features, distributed scaling,regularization, and tuning, and give preliminary results.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Aug 2010</td>
<td align=left valign=top>Sravana Reddy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Aug_2010b');">
Intern Final Talk: Towards deciphering the Voynich manuscript
</a><br>
<span id=abs25_Aug_2010b style="display:none;">
<font size=-1>
<b>Time:</b> 2:30 pm - 3:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> The Voynich manuscript is a medieval illustrated book writtenin an undeciphered script. I will present some questions and answersabout the linguistic and statistical properties of the text.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Aug 2010</td>
<td align=left valign=top>Anni Irvine</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Aug_2010');">
Intern Final Talk: Making Discriminative Alignment Smarter
</a><br>
<span id=abs25_Aug_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 2:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Error analysis on grammars extracted for Machine Translation showsthat bad and useless translation rules are usually caused by badalignments. In this work, we improve previous work on hierarchicaldiscriminative alignment by incorporating knowledge of foreign sideparse trees, output from other aligners, and a look-ahead to grammarextraction. We give examples and results on Chinese to Englishtranslation.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>06 Aug 2010</td>
<td align=left valign=top>Sasha Rush (MIT)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs06_Aug_2010');">
Dual Decomposition for Natural Language Inference
</a><br>
<span id=abs06_Aug_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> This talk presents dual decomposition as a general technique for NLP.<p>The first part introduces dual decomposition as a framework forderiving inference algorithms for NLP problems. The approach relies onstandard dynamic-programming algorithms as oracle solvers forsub-problems, together with a simple method for forcing agreementbetween the different oracles. The approach provably solves a linearprogramming (LP) relaxation of the global inference problem. It leadsto algorithms that are simple, in that they use existing decodingalgorithms; efficient, in that they avoid exact algorithms for thefull model; and often exact, in that empirically they often recoverthe correct solution in spite of using an LP relaxation.<p>The second part presents an application of dual decomposition tonon-projective parsing . We focus on parsing algorithms fornon-projective head automata, a generalization of head-automata modelsto non-projective structures. The dual decomposition algorithms aresimple and efficient, relying on standard dynamic programming andminimum spanning tree algorithms. They provably solve an LP relaxationof the non-projective parsing problem. Empirically the LP relaxationis very often tight: for many languages, exact solutions are achievedon over 98% of test sentences.The accuracy of our models is higherthan previous work on a broad range of datasets.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Jul 2010</td>
<td align=left valign=top>William Yang Wang (Columbia)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Jul_2010');">
Automatic Vandalism Detection in Wikipedia (COLING 2010 Practice Talk)
</a><br>
<span id=abs30_Jul_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Discriminating vandalism edits from non-vandalism edits in Wikipedia is a challenging task, as ill-intentioned edits can include a variety of content and be expressed in many different forms and styles. Previous studies are limited to rule-based methods and learning based on lexical features, lacking in deep linguistic analysis. In this talk, I will discuss a novel Web-based syntactic-semantic modeling method, which utilizes Web search results as resource and trains topic-specific n-tag and syntactic n-gram language models to detect vandalism. By combining basic task-specific and lexical features, we have achieved high F-measures using logistic boosting and logistic model trees classifiers, surpassing the results reported by major Wikipedia vandalism detection systems. This is a joint work with Prof. Kathleen McKeown at Columbia University and will appear in the oral session at COLING 2010.<p>Bio:William Yang Wang is a graduate student at Columbia University, and heis currently visiting the NL Dialog Group at USC/ICT, working on phoneticallyaware natural language understanding and speech synthesis. In 2008-2009, he waswith the Shenzhen Institute of Advanced Technology, Chinese Academy of Sciences.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Jul 2010</td>
<td align=left valign=top>Hoifung Poon (University of Washington)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Jul_2010');">
Statistical Relational Learning for Knowledge Extraction from the Web
</a><br>
<span id=abs26_Jul_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Extracting knowledge from unstructured text has been a long-standinggoal of NLP. The advent of the Web further increases its urgency bymaking available billions of online documents. To represent theacquired knowledge that is complex and heterogeneous, we needfirst-order logic. To handle the inherent uncertainty and ambiguity inextracting and reasoning with knowledge, we need probability.Combining the two has led to rapid progress in the emerging field ofstatistical relational learning. In this talk, I will show thatstatistical relational learning offers promising solutions forconquering the knowledge-extraction quest. I will present Markovlogic, which is the leading unifying framework for representing andreasoning with complex and uncertain knowledge, and has spawned anumber of successful applications for knowledge extraction from theWeb. In particular, I will present OntoUSP, an end-to-end knowledgeextraction system that can read text and answer questions. OntoUSP iscompletely unsupervised and benefits from jointly conducting ontologyinduction, population, and knowledge extraction. Experiments show thatOntoUSP extracted five times as many correct answers compared tostate-of-the-art systems, with a precision of 91%.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Jul 2010</td>
<td align=left valign=top>Yoav Goldberg (Ben Gurion), Sravana Reddy (Chicago), and Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Jul_2010');">
Three Mini-Talks on Creative Language
</a><br>
<span id=abs23_Jul_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Analyzing and generating creative language (stories, poems, jokes, etc) is a growing field within computational linguistics.  We will give three short talks on the topic -- Yoav on Haiku generation, Sravana on understanding eggcorns, and Kevin on poetry translation.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Jul 2010</td>
<td align=left valign=top>Kenji Sagae</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Jul_2010');">
Dynamic Programming for Linear-time Incremental Parsing (ACL 2010 Practice Talk)
</a><br>
<span id=abs07_Jul_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Incremental parsing techniques such as shift-reduce have gained popularity thanks to their efficiency, but there remains a major problem: the search is greedy and only explores a tiny fraction of the whole space (even with beam search) as opposed to dynamic programming. We show that, surprisingly, dynamic programming is in fact possible for many shift-reduce parsers, by merging "equivalent" stacks based on feature values. Empirically, our algorithm yields up to a five-fold speedup over a state-of-the-art shift-reduce dependency parser with no loss in accuracy. Better search also leads to better learning, and our final parser outperforms all previously reported dependency parsers for English and Chinese, yet is much faster.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 Jul 2010</td>
<td align=left valign=top>Zornitsa Kozareva</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_Jul_2010b');">
Learning Arguments and Supertypes of Semantic Relations using Recursive Patterns (ACL 2010 Practice Talk)
</a><br>
<span id=abs02_Jul_2010b style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> A challenging problem in open information extraction and text mining is the learning of the selectional restrictions of semantic relations. We propose a minimally supervised bootstrapping algorithm that uses a single seed and a recursive lexico-syntactic pattern to learn the arguments and the supertypes of a diverse set of semantic relations from the Web. We evaluate the performance of our algorithm on multiple semantic relations expressed using "verb", "noun" and "verb prep" lexico-syntactic patterns. We embark on human based evaluation to assess the quality of the harvested information and find out that the overall accuracy of our algorithm is 90%. We also compare our results with existing knowledge base outlining the similarity and differences of the granularity and diversity of the harvested knowledge.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 Jul 2010</td>
<td align=left valign=top>Ashish Vaswani</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_Jul_2010');">
An MDL-Inspired Objective Function for Unsupervised Training of Generative Models (ACL 2010 Practice Talk)
</a><br>
<span id=abs02_Jul_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> The Minimum Description Length (MDL) principle is a method for modelselection that trades off between the explanation of the data by the modeland the complexity of the model itself. Inspired by the MDL principle, wedevelop an objective function for generative models that captures thedescription of the data by the model (log-likelihood) and the description ofthe model (model size). We also develop a efficient general search algorithmbased on the MAP-EM framework to optimize this function. Since recent workhas shown that minimizing the model size in a Hidden Markov Model forpart-of-speech (POS) tagging leads to higher accuracies, we test ourapproach by applying it to this problem. The search algorithm involves asimple change to EM and achieves high POS tagging accuracies on both Englishand Italian data sets.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Jun 2010</td>
<td align=left valign=top>Jonathan May</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Jun_2010b');">
Efficient Inference Through Cascades of Weighted Tree Transducers (ACL 2010 Practice Talk)
</a><br>
<span id=abs30_Jun_2010b style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 4:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Weighted tree transducers have been proposed as useful formal models for representing syntactic natural language pro- cessing applications, but there has been little description of inference algorithms for these automata beyond formal foundations. We give a detailed description of algorithms for application of cascades of weighted tree transducers to weighted tree acceptors, connecting formal theory with actual practice. Additionally, we present novel on-the-fly variants of these algorithms, and compare their performance on a syntax machine translation cascade based on (Yamada and Knight, 2001).<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Jun 2010</td>
<td align=left valign=top>Jason Riesa</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Jun_2010');">
Hierarchical Search for Word Alignment (ACL 2010 Practice Talk)
</a><br>
<span id=abs30_Jun_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We present a simple yet powerful hierarchical search algorithm for automatic word alignment. Essentially, we treat word alignment as a parsing problem, and induce a forest of alignments from which we can efficiently extract a ranked k-best list. We score a given alignment within the forest with a flexible, linear discriminative model incorporating hundreds of local and nonlocal features features, trained on a relatively small amount of annotated data. We report results on Arabic-English word alignment and translation tasks. Our model outperforms a GIZA++ Model-4 baseline by 6.3 points in F-measure, yielding a 1.1 BLEU score increase over a state-of-the-art syntax-based machine translation system.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Jun 2010</td>
<td align=left valign=top>Yoav Goldberg (Ben Gurion University of the Negev)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Jun_2010');">
Easy First Dependency Parsing and How Different Parsers Behave Differently
</a><br>
<span id=abs11_Jun_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> I will present a new kind of dependency parsing algorithm: easy first,non directional dependency parsing.  This is a greedy, bottom upparser, admitting an efficient O(nlogn) implementation.  Unlikeshift-reduce based greedy parsers, it does not analyze the sentence ina fixed sequential order, but instead tries to make easier attachmentdecisions between harder ones.  The parser performs well on bothHebrew and English.  I also present evidence that the parsers producesqualitatively different parses than either the Malt or the MSTparsers.  This observation give rise to an intriguing questions: whydo different parsers produce different parses? can we quantify thiskind of difference?  In the second part of the talk I will present myattempts to answer these kinds of questions.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Jun 2010</td>
<td align=left valign=top>Mark Johnson (Macquarie University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Jun_2010');">
"Bayesian models of language acquisition" or "Where do the rules come from?" (continued from 7 Jun 2010)
</a><br>
<span id=abs10_Jun_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 10th Floor Conference Room<br>
<b>Abstract:</b> This talk will be a continuation of topics from Monday's talk.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 Jun 2010</td>
<td align=left valign=top>Steven Bird (University of Melbourne)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_Jun_2010');">
The Human Language Project: Building a Universal Corpus of the World's Languages
</a><br>
<span id=abs09_Jun_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:30 pm<br>
<b>Location:</b> 10th Floor Conference Room<br>
<b>Abstract:</b> We present a grand challenge to build a corpus that will include all of the world's languages, in a consistent structure that permits large-scale cross-linguistic processing, enabling the study of universal linguistics.  The focal data types, bilingual texts and lexicons, relate each language to one of a set of reference languages. We propose that the ability to train systems to translate into and out of a given language be the yardstick for determining when we have successfully captured a language.  We call on the computational linguistics community to begin work on this Universal Corpus, pursuing the many strands of activity described here, as their contribution to the global effort to document the world's linguistic heritage before more languages fall silent.<p><p>(This talk will present joint work with Steve Abney.)<p><p>Brief Bio:<p>Steven Bird is Associate Professor in the Department of ComputerScience and Software Engineering at the University of Melbourne, andalso Senior Research Associate at the Linguistic Data Consortium.  In2009 he served as president of the Association for ComputationalLinguistics, and he completed a textbook on Natural LanguageProcessing, published by O'Reilly.  Steven studies scalable,semi-automatic methods for analyzing spoken and written language, andfor preserving endangered languages. This involves a mixture ofcomputational modelling and linguistic fieldwork.  For further detailsand online publications, please visit http://stevenbird.me/<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>08 Jun 2010</td>
<td align=left valign=top>Reut Tsarfaty (Uppsala University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs08_Jun_2010');">
Morphology in Parsing: A Taxonomy-Based Approach
</a><br>
<span id=abs08_Jun_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 11:30 am<br>
<b>Location:</b> 10th Floor Conference Room [1026]<br>
<b>Abstract:</b> It has been a prominent empirical fact in the last decade that languages which have properties that are different from those of English, for instance, languages with free word-order and rich morphological structure, do not lend themselves naturally to the application of statistical models developed for processing English. In this talk I focus on the parsing task and based on the kind of correspondence patterns between form and function that characterize richly inflected languages, I aim to identify the properties of models that can successfully cope with parsing such structures. I start by demonstrating complex many-to-many correspondence patterns in Natural Language using data from the Semitic language Modern Hebrew. I review properties of prominent models for morphological analysis (Stump 2001), and isolate the ones that are appropriate for modeling such complex patterns. I then propose to apply the same strategy to the syntactic domain, arguing that this provides not only for a streamlined interface to morphology, but also better yields a better framework for capturing morphosyntactic interactions on the whole. I illustrate this approach via a particular instantiation, the relational-realizational model of (Tsarfaty 2010), applied to parsing Modern Hebrew. I report significant improvements on various measures over competing alternatives and previously reported results. I finally suggest that other modeling frameworks may often be enhanced to cope better with rich morphosyntactic phenomena, by similarly analyzing their underlying properties and enhancing their relational, or realizational, component, accordingly.<p>Speaker website:http://stp.lingfil.uu.se/~tsarfaty/<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Jun 2010</td>
<td align=left valign=top>Mark Johnson (Macquarie University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Jun_2010');">
"Bayesian models of language acquisition" or "Where do the rules come from?"
</a><br>
<span id=abs07_Jun_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 3:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Each human language contains an astronomically large (if not unbounded) number of different sentences.  How can something so large and complex possibly be learnt?  Over the past decade and a half we've figured out how to define probability distributions over grammars and the linguistic structures they generate, opening up the possibility of Bayesian models of language acquisition.  Bayesian approaches are particularly attractive because they can exploit "prior" (e.g., innate) knowledge as well as statistical generalizations from the input.  This opens the possibility of an empirical evaluation of the utility of various kinds of innate knowledge.  Structured statistical learners have two major advantages over other approaches.  First, because the generalizations they learn and the prior knowledge they utilize are both expressed in terms of explicit linguistic representations, it is clear what is learnt and what information is exploited during learning.  Second, because of the "curse of dimensionality", learners that identify and exploit structural properties of their input seem to be the only ones that have a chance of "scaling up" to learn real languages.  This talk describes Bayesian methods for learning Context-Free Grammars and a generalization of them that we call Adaptor Grammars, and applies them to problems of morphological acquisition and word segmentation.<p>Joint work with Tom Griffiths (Berkeley) and Sharon Goldwater (Edinburgh)<p><p>Speaker Bio:<p>Mark Johnson is a Professor of Language Science (CORE) in the Department of Computing at Macquarie University. He was awarded a BSc (Hons) in 1979 from the University of Sydney, an MA in 1984 from the University of California, San Diego and a PhD in 1987 from Stanford University. He held a postdoctoral fellowship at MIT from 1987 until 1988, and has been a visiting researcher at the University of Stuttgart, the Xerox Research Centre in Grenoble, CSAIL at MIT and the Natural Language group at Microsoft Research. He has worked on a wide range of topics in computational linguistics, but his main research area is parsing and its applications to text and speech processing. He was President of the Association for Computational Linguistics in 2003, and was a professor from 1989 until 2009 in the Departments of Cognitive and Linguistic Sciences and Computer Science at Brown University.<p>Professor Johnson's research area is computational linguistics, i.e., explicit computational models of language acquisition, comprehension and production. His recent work has focused on probabilistic models for syntactic parsing (identifying the way words combine to form phrases and sentences) and semantic interpretation, and on Bayesian models of the acquisition of phonology, morphology and the lexicon.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>21 May 2010</td>
<td align=left valign=top>Zornitsa Kozareva</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs21_May_2010');">
Not All Seeds Are Equal: Measuring the Quality of Text Mining Seeds
</a><br>
<span id=abs21_May_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Open-class semantic lexicon induction is of great interest for the current knowledge harvesting algorithms. We propose a general framework that uses patterns in bootstrapping fashion to learn open-class semantic lexicons for different kinds of relations. These patterns require seeds. To estimate the /goodness/ (the potential yield) of new seeds, we introduce a regression model that considers the connectivity behavior of the seed during bootstrapping. The generalized regression model is evaluated on six different kinds of relations with over 10000 different seeds for English and Spanish patterns. Our approach reaches robust performance of 90% correlation coefficient with 15% error rate for any of the patterns when predicting the /goodness/ of seeds.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 May 2010</td>
<td align=left valign=top>Jinho D. Choi (University of Colorado)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_May_2010');">
K-best, Transition-based Dependency Parsing using Robust Risk Minimization and Automatic Feature Reduction
</a><br>
<span id=abs19_May_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> In this paper, we introduce a way of improving the parsing accuracy of a transition-based dependency parsing model by using k-best ranking. Our approach uses a broader search space than beam search, yet keeps the parsing complexity near a quadratic average running time. In addition, we take a simple post-processing step to ensure the parsing output is a connected dependency tree. As an oracle, we use a high-performing but relatively under-explored machine learning algorithm, Robust Risk Minimization, which gives a higher parsing accuracy than the Perceptron algorithm in the experiments. We also use an automatic feature reduction technique that reduces the feature space by about 49% without compromising the parsing accuracy. We evaluate our approach on the CoNLL '09 shared task English data and improve the transition-based dependency parsing accuracy, showing a 0.64% higher accuracy than the best transition-based CoNLL '09 system.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Apr 2010</td>
<td align=left valign=top>Walter Daelemans (University of Antwerp)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Apr_2010');">
Robust features for Computational Stylometry
</a><br>
<span id=abs30_Apr_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Computational stylometry is the automatic assignment ofauthor properties (e.g., identity, gender, personality,region, age, period, ideology, ...) to a text. Applicationsrange from forensic use to literary scholarship. Themethodology currently most successful is based on the wellknown approach to  text categorization using trainingdata in the form of texts with known classes. The approachworks by extracting text features, selecting the best onesusing statistical methods, representing the text as a vectorof these features, and applying machine learning methods tothe resulting vectors with associated classes. The maindifference with the original text categorization approach isthat the extracted text features may be complex andlinguistically motivated (e.g. syntactic features).I will describe some recent applications at the Universityof Antwerp using this methodology: personality detection,author assignment with many authors and short texts, scribedetection  in medieval texts, provenance and ideology detectionin Kenyan news articles, etc.I will then focus on an empirical comparison of therobustness of different feature types in differentsituations.<p>Bio:<p>Walter Daelemans (PhD in Computational Linguistics, University of Leuven, 1987). Trained as a linguist and psycholinguist at the Universities of Antwerpen and Leuven, he specialised in computational linguistics and held research posts at the University of Nijmegen and the AI Lab of the University of Brussels before becoming a lecturer in Computational Linguistics and Artificial Intelligence at Tilburg University where he founded an early research group on machine learning of language (ILK). Since 1999 he is full-time professor at the University of Antwerp where he also heads the computational linguistics group within the CLiPS research centre. His mainresearch interests are in machine learning of language (especially memory-based learning), text analytics, and computational psycholinguistics. He co-founded ACL's Special Interest Group on Natural Language Learning (SIGNLL) and its associated conference and shared task series (CoNLL).<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Apr 2010</td>
<td align=left valign=top>Rutu Mulkar-Mehta</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Apr_2010');">
Understanding Granularity in Natural Language Discourse (Ph.D. Proposal practice talk)
</a><br>
<span id=abs16_Apr_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Granularity is the task of breaking down a complex description into simpler concepts of finer detail, such that each of the simpler concepts can be collectively describe the main description. It can be thought of as a hierarchy of varying levels of information, with fine grained and specific information i.e. information with more detail at lower levels, and coarse grained and generic information i.e. information with less detail, at higher levels. Shifting in granularity from lower to higher levels leads to information loss or abstraction of certain fine details which become irrelevant at that level. Similarly, shifting granularity from a coarse level to a fine level involves more specific details as compared to the level above this.Humans can seamlessly shift between various granularity levels when interpreting discourse. Textual descriptions are usually written such that the reader gets to know the key features of fine-grained events, and then theoverall picture from the coarse-grained description of a process. This thesis proposal is towards identification and extraction of such structures from Natural Language Discourse.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Apr 2010</td>
<td align=left valign=top>Jonathan May</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Apr_2010');">
Weighted Tree Automata and Transducers for Syntactic Natural Language Processing (Ph.D. Defense practice talk)
</a><br>
<span id=abs14_Apr_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Weighted finite-state string transducer cascades are a powerful formalism for models of solutions to many natural language processing problems such as speech recognition, transliteration, and translation. Researchers often directly employ these formalisms to build their systems by using toolkits that provide fundamental algorithms for transducer cascade manipulation, combination, and inference. However, extant transducer toolkits are poorly suited to current research in NLP that makes use of syntax-rich models. More advanced toolkits, particularly those that allow the manipulation, combination, and inference of weighted extended top-down tree transducers, do not exist. In large part, this is because the analogous algorithms needed to perform these operations have not been defined. This thesis solves both these problems, by describing and developing algorithms, by producing an implementation of a functional weighted tree transducer toolkit that uses these algorithms, and by demonstrating the performance and utility of these algorithms in multiple empirical experiments on machine translation data.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Apr 2010</td>
<td align=left valign=top>Satoshi Sekine (NYU)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Apr_2010');">
On-Demand Information Extraction and Knowledge Discovery
</a><br>
<span id=abs05_Apr_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 11:30 am<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> At present, adapting an Information Extraction system to new topics isan expensive and slow process, requiring some knowledge engineering foreach new topic. We propose a new paradigm of Information Extractionwhich operates 'on demand' in response to a user's query. On-demandInformation Extraction (ODIE) aims to completely eliminate thecustomization effort. Given a user's query, the system willautomatically create patterns to extract salient relations in the textof the topic, and build tables from the extracted information usingparaphrase discovery technology. It relies on recent advances in patterndiscovery, paraphrase discovery, and extended named entity tagging.I will show you a demo system, which produce a table in less than aminute for any give queries.<p>I will also explain the need of linguistic knowledge and introduce someweakly supervised learning methods. I will show a demo of the ngramsearch engine, which extracts ngrams and sentences which match to aquery with arbitrary wildcard.<p>Also, I will give a brief introduction about the Web People Search.It is a task to disambiguate search results of people name and peopleattribute extraction task. We organized WePS1 and 2, and currentlystarted the third evaluation, which includes 2 tasks: 1) the combinedtask of people disambiguation and attribute extraction and 2)organization disambiguation from twitter messages.<p>Brief Bio:<p>Satoshi Sekine is an Research Associate Professor at New York University.He received his MSc at UMIST, UK in 1992 and his PhD in 1998 at NYU. Hehas been working on various topics, including parsing, NE, InformationExtraction and minimally supervised knowledge discovery. He edited a bookabout NE from John Benjamins, organized a JHU summer workshop 2009,WePS task, NSF symposium on Semantic Knowledge Discovery, Organizationand Use in 2008, workshop on Textual Entailment and Parsing 2007 and so on.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 Apr 2010</td>
<td align=left valign=top>Eduard Hovy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_Apr_2010');">
Annotation
</a><br>
<span id=abs02_Apr_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Despite a lot of recent attention, corpus annotation remains somewhat of an art.  This talk is the main part of a tutorial intended to provide the attendee with an in-depth look at the procedures, issues, and problems in corpus annotation.  After describing some currently available resources, services, and frameworks (including the QDAP annotation center, Amazon's Mechanical Turk, annotation facilities in GATE, and UIMA), it addresses the open questions, pitfalls, and problems that the annotation manager should avoid, highlighting the seven major issues at the heart of annotation for which there are as yet no standard and fully satisfactory answers or methods.  For each of these it provides suggestions and a possibly helpful list of references.<p>Your participation in order to critique the tutorial is appreciated!<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>31 Mar 2010</td>
<td align=left valign=top>Haitao Mi (ICT China)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs31_Mar_2010');">
Lattice and Forest for SMT
</a><br>
<span id=abs31_Mar_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Statistical machine translation (SMT) has witnessed promising progress in recent years. Typically, an SMT system is characterized as a single-best pipeline, whose modules are independent to each other and only take as input single-best results from the previous module. With this assumption, each module will inevitably introduce errors in single-best outputs, which will propagate and accumulate along the pipeline, and eventually hurt the translation quality.<p><p>In order to alleviate this problem, we use compact structures such as lattices and forests instead of single-best results in each module, and then integrate both lattice and forest into a single tree-to-string system. We explore the algorithms of lattice parsing, lattice-forest-based rule extraction and decoding. Experiments show a statistically significant improvement over a start-of-the-art forest-based baseline. More interestingly, we observe a significant reduction in rule-set size when extracting with a lattice, which implies better generalizability (with a smaller model).<p><p><p>About the speaker:<p>Haitao Mi is an Assistant Researcher in the Institute of Computing Technology, Chinese Academy of Sciences (CAS/ICT). He received his Ph.D. from CAS/ICT in 2009. His main research interests include syntax-based machine translation and statistical parsing. Additional information about him and his group can be found at http://nlp.ict.ac.cn/~mihaitao/<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Mar 2010</td>
<td align=left valign=top>Victoria Fossum</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Mar_2010');">
Integrating Parsing and Word Alignment in Syntax-Based Machine Translation (Ph.D. Defense practice talk)
</a><br>
<span id=abs30_Mar_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 11th Floor Conference Room [1135]<br>
<b>Abstract:</b> Training a string-to-tree syntax-based statistical machine translationsystem to translate from a source language (e.g. Chinese or Arabic)into a target language (e.g. English) requires the followingresources: a parallel corpus (a large set of example sentences in thesource language that have been translated into the target language bya human); a word alignment (a word-to-word correspondence between eachsource-target sentence pair); and a parse tree (a syntacticrepresentation) of each sentence in the target language.  From thesetraining examples, the system learns to translate source-languagesequences of words into target-language trees.  In order to ensurebroad coverage, the parallel corpus of training examples must besufficiently large (on the order of millions of sentence pairs).Manually annotating such large corpora would be prohibitivelytime-consuming.  Instead, these corpora must be word-aligned andparsed automatically.<p>There are two problems with existing approaches to automatic wordalignment and parsing for syntax-based machine translation.  First,these processes are noisy and introduce errors which impacttranslation quality.  Second, these processes are typically performedindependently of one another.  Since each process produces constraintsthat can be used to guide the other, by more closely integrating them,we can expect to improve the accuracy of each process.  In thisthesis, we address these two problems as follows: first, we improveupon the accuracy of a state-of-the-art parser; second, we use wordalignments to improve parse accuracy; third, we use parses to improveword alignment accuracy; and fourth, we optimize parses and wordalignments simultaneously.  We examine the impact of each of thesemethods upon parse quality, alignment quality, and translation qualityin a downstream syntax-based machine translation system.  Our resultsdemonstrate that more closely integrating word alignment and syntacticparsing can indeed improve the accuracy of each process, and in somecases leads to an improvement in translation quality relative to astate-of-the-art syntax-based statistical machine translation system.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Mar 2010</td>
<td align=left valign=top>Elsi Kaiser (USC)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Mar_2010');">
Discourse coherence effects in language processing: A psycholinguistic approach
</a><br>
<span id=abs26_Mar_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> In this talk I will discuss some recent results from my lab on the relationship between reference resolution and coherence relations. Previous work found that pronoun interpretation is guided by the coherence relations between clauses (e.g., 'as a result', 'and then', 'and similarly'), e.g. Hobbs (1979), Kehler et al. (2008). For example, consider "Phil tickled Stan, and similarly Liz poked him" (preference to interpret 'him' as Stan) and "Phil tickled Stan, and as a result Liz poked him" (more consideration of Phil as the antecedent of 'him'). However, the linguistic and cognitive properties of these coherence representations are not yet fully understood, and it is also not yet clear whether this kind of coherence sensitivity extends straightforwardly to other kinds of reduced referring expressions in addition to pronouns (e.g. anaphoric demonstratives, which can in many languages be used to refer to humans as well). I will discuss experiments -- conducted using a visual-world eye-tracking paradigm as well as other methods -- that investigate the nature and generality of these coherence representations. In addition to investigating whether coherence effects extend to other reduced referring expressions, I have also explored the domain-generality of coherence representations, for example whether non-linguistic, visuo-spatial input (video clips of moving shapes) can prime (bias) subsequent reference resolution in a seemingly unrelated task. Time permitting, I will also discuss issues related to data analysis and the annotation of data collected through psycholinguistic experiments.<p>Brief bio:<p>Elsi Kaiser is an Assistant Professor of Linguistics at the University ofSouthern California, with a specialization in Psycholinguistics. Shereceived her Ph.D. from the University of Pennsylvania in 2003, and was apost-doc at the University of Rochester for two years before moving toUSC.  Her current research focuses on the comprehension of variousreferential forms (including pronouns, reflexives and demonstratives) indifferent languages, which she investigates using a range of tools,including eye-tracking.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Mar 2010</td>
<td align=left valign=top>Liang Huang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Mar_2010');">
Incremental Parsing
</a><br>
<span id=abs05_Mar_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> (a 20-minute version of this talk was given at the ISD retreat, with no technical details.)<p>Parsing is the task of finding the most probable interpretation for a given sentence, and is a central problem in NLP because it serves as the basis of many downstream applications such as machine translation, summarization, paraphrasing, and question answering. Improving parsing efficiency and accuracy will greatly improve the applicability of those applications.<p>However, unlike human parsing which is amazingly efficient by scanning the sentence incrementally, current state-of-the-art parsers are either extremely slow (standard algorithms like CKY scale cubically with sentence length), or purely greedy in the search algorithm that only touches a tiny fraction of the (exponentially) large search space. We instead propose a dynamic programming algorithm that does incremental parsing and ambiguity packing along the way, such that the running time is (almost) linear, and yet searches over exponentially many trees. Empirical results are very good, but further details withheld -- come to the talk!<p>This is a joint work with Kenji Sagae, USC/ICT.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Feb 2010</td>
<td align=left valign=top>David Farwell (Universitat Politecnica de Catalunya)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Feb_2010');">
Knowledge Acquisition and Textual Entailment: a proposed research program
</a><br>
<span id=abs05_Feb_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> The aim of this presentation is to describe a program of research in the area of automatic knowledge acquisition which has been submitted in response to the European Information and Communication Technologies FP7 Call 5, Objective 4.3: Intelligent Information Management. The objective of this research program is to develop data-driven techniques and tools for extracting common sense knowledge from unstructured text and applying it for making the approximate inferences needed in order to interpret the ambiguities of human language communication.<p>The central activities include developing techniques and tools for:- converting texts into representations of the particular events and entities they refer to,- identifying relations between these entity and event instances such as shared participants, temporal and spatial juxtapositions, causal connections, entailments, and so on, thereby constructing representations of complex scenarios,- inducing from sets of like entity, event and scenario instances, representations of entity, event and scenario types,- using these entity, event and scenario types as background knowledge to support approximate inferencing (e.g., statistical inference rules such as poisoning probably entails death) within important interactive tasks such as Information Retrieval and web search.<p>The technologies developed will be validated by applying them to two broad NLU tasks: faceted search for Information Retrieval in the domain of health information and open-domain web search for web browsing and UI improvements.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Jan 2010</td>
<td align=left valign=top>David Chiang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Jan_2010');">
Towards Tree-to-Tree Translation
</a><br>
<span id=abs22_Jan_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Statistical translation models that try to capture the recursive structure of language have been widely adopted over the last few years. These models make use of varying amounts of information from linguistic theory: some use none at all, some use information about the grammar of the target language, some use information about the grammar of the source language. But progress has been slower on tree-to-tree translation models: models that are able to learn the relationship between the grammars of both the source and target language. I will discuss the reasons why tree-to-tree translation has been a challenge, review existing attempts at tree-to-tree models, and present some of our own work-in-progress on robustly modeling source and target language syntax for significant improvements in translation quality.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Jan 2010</td>
<td align=left valign=top>Min-Yen Kan (National University of Singapore)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Jan_2010');">
ForeCite: towards a more integrated scholarly digital library
</a><br>
<span id=abs15_Jan_2010 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Scholarly digital libraries (DLs) have managed to scale upto handle millions of documents and now feature tools to trackcitations and references between articles.  However, users of digitallibraries typically often access the DL merely to check references or todownload the PDF of the document.  What features will thenext-generation DL need to inspire scholars to use digital library formore than accessing the document?  In ForeCite, our digital libraryproject at NUS, we believe part of the answer lies in integratingcommon end user's concerns: annotation, sharing, off-and-online usageand focusing on the intra-document processing.  I will describe anddemonstrate some of the preliminary components of the ForeCite system:including its web based front end, ParsCit (a backend open-sourcecitation segmentation system), and ForeCiteNote (TiddyWiki basedresearch notetaking system) and ForeCiteReader (Google Books-likeinterface for annotation and collaboration on notetaking, and FireCite(browser extension for recognizing citations on webpages).<p>Speaker Bio:<p>Min-Yen Kan (BS;MS;PhD Columbia Univ.) is an associate professor atthe National University of Singapore.  His research interests includedigital libraries and applied natural language processing.  Specificprojects include work in the areas of scientific discourse analysis,multiword expression extraction and understanding, machine translationand applied text summarization.  Currently, he is an associate editorfor "Information Retrieval" and is the Editor for the ACL Anthology,the computational linguistics community's largest archive of publishedresearch. More information about him and his group can be found at theWING homepage: http://wing.comp.nus.edu.sg/<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Dec 2009</td>
<td align=left valign=top>Anselmo Penas (UNED, Spain)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Dec_2009');">
Evaluating Question Answering Validation
</a><br>
<span id=abs11_Dec_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> During the last decade, Question Answering (QA) was redefined inside TREC as a kind of highly-precision-oriented Information Retrieval task where the introduction of NLP was necessary, specially for Answer Extraction purposes. The same general approach was activated at the Cross-Language Evaluation Forum (CLEF) in 2003, but for other European languages different than English, and with some different settings and subtasks. The talk will report the last 4-year cycle of the QA evaluation at CLEF, starting with the general methodology for long term QA evaluation at CLEF and the motivation for the Answer Validation task, continuing with the development of AVE in the three year campaign, and concluding with the goals, evaluation measure and results of the current QA evaluation setting after the AVE experience.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 Dec 2009</td>
<td align=left valign=top>Tomohide Shibata (Kyoto University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_Dec_2009');">
Introduction of Our Research (text analysis and IR)
</a><br>
<span id=abs09_Dec_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:30 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> I am Tomohide Shibata, an assistant professor at Kyoto University,Japan. I am working with Prof. Kurohashi. I have been visitingProf. Hovy for three weeks. In this talk, I introduce ourresearch. Our research roughly consists of three fields: basic textanalysis, information retrieval and machine translation. Among them,basic text analysis and information retrieval, which I am engaged in,are introduced.<p>In basic text analysis, we have been developed Japanese morphologicalanalyzer and parser, which are widely used in research community. Caseframes, which describe the relation between a verb and its casecomponents, are automatically constructed from a large Webcorpus. Synonym and is-a relations are automatically extracted from adictionary and Web corpus.<p>In Information Retrieval, we are running a search engineinfrastructure called TSUBAKI. The features of TSUBAKI are (i) thesentence structure (dependency relation) is considered in the documentranking, and (ii) the expression divergence between a query and adocument is assimilated. We are also running a search resultclustering system based on TSUBAKI.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>04 Dec 2009</td>
<td align=left valign=top>Donald Metzler (Yahoo! Research)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs04_Dec_2009');">
Learning Query Concept Importance Using a Weighted Dependence Model
</a><br>
<span id=abs04_Dec_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Modeling query concepts through term dependencies has been shown to have a significant positive effect on retrieval performance, especially for tasks such as Web search, where relevance at high ranks is particularly critical. Most previous work, however, treats all concepts as equally important, an assumption that often does not hold, especially for longer, more complex queries. In this talk, I will describe the state-of-the-art practices for modeling query term dependencies for information retrieval using Markov random fields. Within this context I will discuss why many NLP-inspired approaches to the problem, such as query segmentation, have failed to show consistent improvements when applied to information retrieval tasks. Experimental results carried out on a number of TREC and Yahoo! Web search test collections will be presented showing the effectiveness of various types of term (in)dependence models.<p>Brief bio:Donald Metzler is a Research Scientist in the Search and Computational Advertising group at Yahoo! Research. He obtained his Ph.D. from the University of Massachusetts in 2007. He is an active member of the information retrieval and web search communities, having served on the program committees of SIGIR, ECIR, HLT, EMNLP, WSDM, WWW, and ICML. He has published over 35 research papers, has 13 patents pending, and is the co-author of Search Engines: Information Retrieval in Practice. His research interests include information retrieval, web search, computational advertising, and applications of machine learning to large-scale text problems.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>20 Nov 2009</td>
<td align=left valign=top>Marco Pennacchiotti (Yahoo! Research)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs20_Nov_2009');">
Entity Extraction via Ensemble Semantics
</a><br>
<span id=abs20_Nov_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> In this talk I will present Ensemble Semantics (ES), a new general framework for information extraction developed at Yahoo!, that combines multiple sources of information and extractors. The ES framework is based on the hypothesis that although distributional and pattern-based extraction algorithms are complementary, they do not exhaust the semantic space; other sources of evidence can be leveraged to better combine them.  In this presentation, I will focus on a specific implementation of ES for the task of entity extraction. I will report experimental results showing large gains in performance, by combining state-of-the-art distributional and pattern-based systems with a large set of features from a document webcrawl, one year of query logs, and a snapshot of Wikipedia. I will also propose an analysis of feature correlations and interactions showing the value of the different feature sets. I will conclude discussing some issues that can impact on the overall performance of entity extraction algorithms.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Oct 2009</td>
<td align=left valign=top>Steve DeNeefe</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Oct_2009');">
Tree Adjoining Machine Translation (thesis proposal practice talk)
</a><br>
<span id=abs23_Oct_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Tree Adjoining Grammars have well-known advantages but are typically considered too difficult for practical systems.  We propose that, when done right, adjoining improves translation quality without becoming computationally intractable.  Using adjoining to model optionality allows general translation patterns to be learned without the clutter of endless variations of optional material.  The appropriate modifiers can later be spliced in as needed to translate details.<p>In this proposal, we describe challenges encountered by phrase-based and syntax-based machine translation (MT) systems today, and present an in-depth, quantitative comparison of both models. Then, we describe a novel model for statistical MT which addresses these challenges using a Synchronous Tree Adjoining Grammar.  We introduce a method of converting these grammars to a weakly equivalent tree transducer for decoding.   And we present a method for learning the rules and associated probabilities of this grammar from aligned tree/string training data.<p>Finally, our initial results show that adjoining already delivers an end-to-end improvement of +0.8 BLEU over a baseline statistical syntax-based MT model on a medium-scale Arabic/English MT task.  Furthermore, we demonstrate it is a competitive entry in the Urdu-English track of the 2009 NIST MT evaluation.  We then propose improvements to the model, decoding, and extraction that promise to allow this new, linguistically-motivated MT model to surpass its syntax-based and phrase-based cousins in a wide range of scenarios and language pairs.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>21 Oct 2009</td>
<td align=left valign=top>Douglas W. Oard (Maryland)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs21_Oct_2009');">
Who 'Dat? Identity resolution in large email collections
</a><br>
<span id=abs21_Oct_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> Automated techniques that can support the human activities of search andsense-making in large email collections are of increasing importance for abroad range of uses, including historical scholarship, law enforcement andintelligence applications, and lawyers involved in "e-discovery" incidentto civil litigation.  In this talk, I'll briefly describe some of the workto date on searching large email collections, and then for most of thetalk I will focus on the more challenging task of support forsense-making.  Specifically, I'll describe joint work with Tamer Elsayedto automatically resolve the identity of people who are mentionedambiguously (e.g., just by first name) in a collection of email from afailed corporation (Enron).  Our results indicate that for people who arewell represented in the collection we can use a generative model to guessthe right identity about 80% of the time, and for others we are rightabout half the time.  I'll conclude the talk with a few remarks on ournext directions for techniques, evaluation, and additional types ofcollections to which similar ideas might be applied.<p>About the Speaker:<p>Douglas Oard is an Associate Professor at the University of Maryland,College Park, with joint appointments in the College of InformationStudies and the Institute for Advanced Computer Studies; he is onsabbatical at Berkeley's iSchool for the Fall 2009 semester.  Dr. Oardearned his Ph.D. in Electrical Engineering from the University ofMaryland, and his research interests center around the use of emergingtechnologies to support information seeking by end users.  His recent workhas focused on interactive techniques for cross-language informationretrieval and techniques for search and sense-making in conversationalmedia.  Additional information is available athttp://www.glue.umd.edu/~oard/.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 Oct 2009</td>
<td align=left valign=top>Nandakishore Kambhatla (IBM India)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_Oct_2009');">
Extracting Social Networks and Biographical Facts from Conversational Speech Transcripts
</a><br>
<span id=abs09_Oct_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> We present a general framework for automatically extracting social networks and biographical facts from conversationalspeech. Our approach relies on fusing the output produced by multiple information extraction modules, including entityrecognition and detection, relation detection, and event detection modules. We describe the specific features and algorithmicrefinements effective for conversational speech. These cumulatively increase the performance of social networkextraction from 0.06 to 0.30 for the development set, and from 0.06 to 0.28 for the test set, as measured by f-measure on theties within a network. The same framework can be applied to other genres of text -- we have built an automatic biographygeneration system for general domain text using the same approach.<p>--<p>Brief Bio:Nanda Kambhatla has nearly 17 years of research experience in the areas ofNatural Language Processing (NLP), text mining, information extraction, dialog systems, andmachine learning. He holds 6 U.S patents and has authored over 30 publications in books,journals, and conferences in these areas. Nanda holds a B.Tech in Computer Science and Engineeringfrom the Institute of Technology, Benaras Hindu University, India, and a Ph.D in ComputerScience and Engineering from the Oregon Graduate Institute of Science & Technology, Oregon, USA.<p>Currently, Nanda is the manager of the Data Analytics Group at IBM's India Research Lab (IRL), Bangalore. The group is focused on research on machine translation, Natural Language Processing, text analysis and machine learning techniques for developing analyticssolutions to help IBM's services divisions. Most recently, Nanda was the manager of the StatisticalText Analytics Group at IBM's T.J. Watson Research Center, the Watson co-chair of the NaturalLanguage Processing PIC, and the task PI for the Language  Exploitation Environment (LEE) subtaskfor the DARPA GALE project. He has been leading the development of information extractiontools/products and his team has achieved top tier results in successive Automatic Content Extraction(ACE) evaluations conducted by NIST for extracting entities, events and relations from text frommultiple sources, in multiple languages and genres.<p>Earlier in his career, Nanda has worked on natural language web-based and spoken dialog systems at IBM. Before joining IBM, he has worked on information retrieval and filtering algorithms as a senior research scientist at WiseWire Corporation, Pittsburgh and on image compression algorithms while working as a postdoctoral fellow under Prof. Simon Haykin at McMaster University, Canada.<p>Nanda's research interests are focused on NLP and technology solutions for creating, storing, searching, and processing large volumes of unstructured data (text, audio, video, etc.) and specifically on applications of statistical learning algorithms to these tasks.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Sep 2009</td>
<td align=left valign=top>David Chiang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Sep_2009');">
Tutorial on HPC
</a><br>
<span id=abs11_Sep_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th Floor Large Conference Room [1135]<br>
<b>Abstract:</b> This tutorial will be a short introduction to using the Linux cluster atUSC's High-Performance Computing (HPC) facility. Topics will include:(1) basics of starting jobs on the cluster using Torque/PBS,(2) dealing with common problems like jobs not starting orspontaneously dying,(3) maximizing the performance of your jobs (both yours and otherpeople's), e.g., using the correct filesystem and tuning it for better speed,(4) embarrassingly parallel processing and poor-man's workflows.<p>It will NOT coverHadoop,MPI,real workflow management tools like Condor.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>28 Aug 2009</td>
<td align=left valign=top>Adam Pauls (UC Berkeley) <br> Michael Auli (Edinburgh)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs28_Aug_2009');">
Intern Final Talks
</a><br>
<span id=abs28_Aug_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Tree-to-String Alignment Models<p>Machine translation systems typically rely on some form alignment as apreprocessing step. Typically, these alignments take the form ofword-to-word alignments. In this talk, we will introduce severalmodels aimed at aligning foreign words to either English words ornodes in the English parse tree. Such word-to-node alignments offerseveral potential advantages over traditional word-to-wordalignments. Firstly, since the extraction process for some syntacticsystems explicitly considers the English trees, we expect that alsoconsidering the trees at alignment time will produce alignments thatwill better suit the extraction process. Secondly, aligning foreignfunction words to English tree nodes can admits highly desirablesyntactic transfer rules which cannot be directly as word-to-wordalignments. Finally, word-to-node alignments can effectively modelmany-to-one alignments.  We present four models of increasingcomplexity and show preliminary results for each model.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Aug 2009</td>
<td align=left valign=top>Erica Greene (Haverford) <br> Paramveer Dhillon (Penn)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Aug_2009');">
Intern Final Talks
</a><br>
<span id=abs27_Aug_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> TALK 1: Erica Greene<p>Title: A Statistical Foray into Poetry<p>Abstract: Although the analysis and generation of poetry is often considered anexclusively human task, we have taken some initial steps to automatethe process.  We build a series of finite state transducers to analyzepoetic meter and train them on a handmade corpus of poetry. We thenuse these trained transducers to generate poetry.  Specifically, wefocus on generating sonnets and limericks.<p>------------------------------------------<p>TALK 2: Paramveer Dhillon<p>Title: Learning to simplify target language for MT + Unsupervised log-linearmodels for Word Alignment<p>Abstract: We consider the Machine Translation task for the language pair(Chinese and English), where English is the target language. There arelots of redundancies in English language, e.g. It has capitalization,i.e. the first word of each sentence is capitalized, and it hasdifferent morphology i.e. it has noun and verb endings; none of whichare present in Chinese. In a way, due to these redundancies, we arelearning that a single Chinese word "tamen" translates to "They" and"they" and another Chinese word translates to "run", "runs" and"running". We present generative models which learn to "cluster" thetarget language vocabulary, by removing the above redundancies, namely(Capitalization and Different morphology). We show results on how this"clustering" affects the translation quality in end-to-end MTexperiments.<p>In the last part of the talk, I would talk about using unsupervisedlog-linear(discriminative) models for improving word alignments. Thereare very few precedents of using discriminative models for wordalignment in totally unsupervised settings. (Taskar et. al. '05) and(Lacoste-Julien et. al. '06) used maximum weight bipartite matching in"nearly" unsupervised setting and (Blunsom et. al. '06) used CRFs forsupervised word alignment. We use log-linear models in totallyunsupervised settings to do word alignments. Speicifically we useContrastive Estimation (Smith et. al. '05) to shift the probabilitymass to the correct set of alignments from a well-chosen"neighborhood" of those alignments. In the end I will show somepreliminary word alignment results using our approach.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Aug 2009</td>
<td align=left valign=top>Sujith Ravi</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Aug_2009');">
Natural Language Decipherment: Solving Problems in Natural Language Processing without Labeled Data (Thesis Proposal practice talk)
</a><br>
<span id=abs26_Aug_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Natural Language Decipherment: Solving Problems in Natural Language Processing without Labeled Data (Thesis Proposal practice talk)<p>A wide variety of problems in NLP require parallel data to train supervised models to perform different tasks. For example, in machine translation (where the task is to translate between two languages automatically) parallel data containing source/target language sentence pairs is required to train various models which can then be used to translate new sentences or documents. The dependency on parallel data for many of these NLP tasks limits their applications to specific domains, or language pairs for which a lot of training data is readily available. On the other hand, collecting parallel data for new domains, language pairs, etc. is a costly as well as time-intensive operation. For such tasks, the development of novel unsupervised approaches which require only {\em non-parallel} data for training can enable their application to new domains and potentially broaden the impact and benefits of NLP research to wider areas.<p>A similar problem has been tackled by cryptographers and archaeologists in a different context---for "decipherment" purposes. During the 1940's and 1950's, mathematicians and scientists worked on code-breaking operations, which spurred the development of many research ideas for modern computer science. For such problems, it is highly unlikely to assume the availability of parallel data relating the ciphertext and plaintext, yet cryptographers and archaeologists have attempted to solve such tasks using various decipherment techniques along with other non-parallel sources of information.<p>In this thesis proposal practice talk, I will show how we combine the two ideas (decipherment and unsupervised learning for NLP problems) together and present a unified decipherment-based approach for modeling a wide range of problems in NLP. Instead of relying on parallel data, I propose to use alternate sources of linguistic knowledge and large quantities of readily available monolingual data to induce strong bilingual connections in problems such as machine transliteration and translation. The talk will describe how various NLP problems such as unsupervised part-of-speech tagging, word alignment, transliteration, and machine translation can be formulated as decipherment tasks. I will present decipherment algorithms for tackling many of these problems and show that it is possible to achieve good results for many problems of interest in NLP without using any parallel data at all.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>21 Aug 2009</td>
<td align=left valign=top>Liang Huang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs21_Aug_2009');">
Bilingually-Constrained (Monolingual) Shift-Reduce Parsing
</a><br>
<span id=abs21_Aug_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:15 pm<br>
<b>Location:</b> 4th Floor Conference Room<br>
<b>Abstract:</b> <p>Jointly parsing two languages has been shown to improve accuracies oneither or both sides. However, its search space is much bigger thanthe monolingual case, forcing existing approaches to employcomplicated modeling and crude approximations. Here we propose a muchsimpler alternative, bilingually-constrained monolingual parsing,where a source-language parser learns to exploit reorderings asadditional observation, but not bothering to build the target-sidetree as well. We show specifically how to enhance a shift-reducedependency parser to use alignment features to resolve shift-reduceconflicts. Experiments on the bilingual portion of Chinese Treebankshow that, with just 3 bilingual features, we can improve parsingaccuracies by 0.6% for both English and Chinese, with negligible (~6%)efficiency overhead, thus much faster than biparsing.<p>http://www.cis.upenn.edu/~lhuang3/biparsing.pdf<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Jul 2009</td>
<td align=left valign=top>Adam Pauls (UC Berkeley) <br> Ulf Hermjakob</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Jul_2009');">
Practice talks for EMNLP
</a><br>
<span id=abs24_Jul_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:15 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <p>K-Best A* Parsing (Adam Pauls)<p>A* parsing makes 1-best search efficient bysuppressing unlikely 1-best items. Existing k-best extraction methods can efficiently searchfor top derivations, but only after an exhaus-tive 1-best pass. We present a unified algo-rithm for k-best A* parsing which preservesthe efficiency of k-best extraction while giv-ing the speed-ups of A* methods. Our algo-rithm produces optimal k-best parses under thesame conditions required for optimality in a1-best A* parser. Empirically, optimal k-bestlists can be extracted significantly faster thanwith other approaches, over a range of gram-mar types.<p>------------------------------------------<p>Improved Word Alignment with Statistics and Linguistic Heuristics (Ulf Hermjakob)<p>We present a method to align words in a bitext that combines elementsof a traditional statistical approach with linguistic knowledge.We demonstrate this approach for Arabic-English, using an alignmentlexicon produced by a statistical word aligner, as well as linguisticresources ranging from an English parser to heuristic alignment rulesfor function words. These linguistic heuristics have been generalizedfrom a development corpus of 100 parallel sentences.Our aligner, UALIGN, outperforms both the commonly used GIZA++ alignerand the state-of-the-art LEAF aligner on F-measure and producessuperior scores in end-to-end statistical machine translation,+1.3 BLEU points over GIZA++, and +0.7 over LEAF.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Jul 2009</td>
<td align=left valign=top>Mark Hopkins (Language Weaver)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Jul_2009');">
Cube Pruning as Heuristic Search (Practice talk for EMNLP)
</a><br>
<span id=abs23_Jul_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:45 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Cube pruning is a fast inexact method for generating the items of abeam decoder.  Here we show that cube pruning is essentiallyequivalent to A* search on a specific search space with specificheuristics.  We use this insight to develop faster and exact variantsof cube pruning.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Jul 2009</td>
<td align=left valign=top>Paramveer Dhillon (Penn)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Jul_2009');">
Transfer Learning for WSD & Non-local constraints for Named Entity Recognition
</a><br>
<span id=abs17_Jul_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk will be divided into two parts. In the first part I willtalk about using Transfer Learning techniques to improve the task ofWord Sense Disambiguation (WSD).Usually in supervised WSD, we suffer due to paucity of labeled data asthere are some words that occur less frequently in the data and itsvery difficult to get enough labeled data for these words. In suchcases it is very difficult to build high accuracy supervised learningmodels for these words. So, we propose an approach called TransFeat(based on the MDL principle) which ``transfers information", fromsimilar words in the form of a feature relevance prior to get improvedaccuracies on these rare words. Besides this, our experiments showthat we also get decent improvement in accuracy for words that havemore amount of labeled data available. TransFeat gives accuracies thatare in the worst case comparable to state-of-the-art on ONTONOTES andSENSEVAL-2 datasets.<p>In the second part of the talk I will talk about incorporatingnon-local constraints in Named Entity Recognition (NER) systems. Themain idea is that some linguistic constraints (e.g. every occurrenceof the word ``Einstein" in the data should have the tag PERi.e. person ) are very useful and can give improved performance butthey are non - local and hence are intractable and can not beefficiently modeled using state-of-the-art sequence modeling methodslike CRFs. Though people have used Skip-chain CRFs (with LoopyBP)(Sutton and McCallum '04) and Gibbs Sampling (Finkel and Manning'05) to enforce these non-local constraints, but they turn out to bereally inefficient and custom-tailored to one particular kind ofconstraints (say) consistency constraints of the type mentionedabove. We propose a constrained version of EM in which a general setof constraints (not limited to consistency constraints!) can beincorporated into the model. In the end I will show some results ofthis approach on CoNLL 03 English and CoNLL 02 Spanish NER shared tasks.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Jul 2009</td>
<td align=left valign=top>Yang Liu (ICT China)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Jul_2009');">
Weighted Alignment Matrices for Statistical Machine Translation
</a><br>
<span id=abs16_Jul_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 11:30 am<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Current statistical machine translation systems usuallyextract rules from bilingualcorpora annotated with 1-best alignments. They are prone to learnnoisy rules due to alignment mistakes. We propose a new structurecalled weighted alignment matrixto encode all possible alignments for a parallel text compactly. Thekey idea is to assign a probability to each word pair to indicate howwell they are aligned. We design new algorithms for extracting phrasepairs from weighted alignment matrices and estimating theirprobabilities. Our experiments on multiple language pairs show thatusing weighted matrices achieves consistent improvements over usingn-best lists in significant less extraction time.<p>About the speaker:<p>Yang Liu is an Assistant Researcher at Institute of ComputingTechnology (ICT), Chinese Academy of Sciences. He received his PhDdegree in Computer Science from ICT in 2007. His major researchinterests include statistical machine translation and Chineseinformation processing. He has been working on syntax-based modeling,word alignment, and system combination. His paper on tree-to-stringtranslation won the Meritorious Asian NLP Paper Award of COLING/ACL2006. He served as Reviewers for TALIP, TSLP, JNLE, ACL, EMNLP, AMTA, and SSST.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Jul 2009</td>
<td align=left valign=top>Yang Liu (ICT China)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Jul_2009');">
An Overview of Tree-to-String Translation Models
</a><br>
<span id=abs15_Jul_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Recent research on statistical machine translation has lead to the rapid development of syntax-based translation models, whichexploit syntactic information to direct translation. In this talk, Iwill give an overview of tree-to-string translation models, one of thestate-of-the-art syntax-based models. In a tree-to-string model, the source side is a phrase structure parse tree and the target side is astring. This talk includes the following topics: (1) tree-based tree-to-string model, (2) tree-sequence based tree-to-string model,(3) forest-based tree-to-string model, and (4) context-awaretree-to-string model. Experimental results show that the forest-basedtree-to-string system outperforms Hiero significantly on Chinese-to-English translation.<p>About the speaker:<p>Yang Liu is an Assistant Researcher at Institute of ComputingTechnology (ICT), Chinese Academy of Sciences. He received his PhDdegree in Computer Science from ICT in 2007. His major researchinterests include statistical machine translation and Chineseinformation processing. He has been working on syntax-based modeling,word alignment, and system combination. His paper on tree-to-stringtranslation won the Meritorious Asian NLP Paper Award of COLING/ACL2006. He served as Reviewers for TALIP, TSLP, JNLE, ACL, EMNLP, AMTA, and SSST.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Jul 2009</td>
<td align=left valign=top>Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Jul_2009');">
Excerpts from ACL-09 Tutorial on "Topics in Machine Translation"
</a><br>
<span id=abs10_Jul_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Philipp Koehn and I will do a machine translation tutorial at ACL.Instead of an introductory tutorial, we'll do short 15-minute segmentson various hot topics in MT research.  For the ISI NL seminar, I'llpresent 3 or 4 of those topics, determined by audience vote.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Jun 2009</td>
<td align=left valign=top>Steve DeNeefe</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Jun_2009');">
Synchronous Tree Adjoining Machine Translation (Practice talk for EMNLP)
</a><br>
<span id=abs26_Jun_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Tree Adjoining Grammars have well-known advantages, but are typicallyconsidered too difficult for practical systems.  We demonstrate that,when done right, adjoining improves translation quality withoutbecoming computationally intractable.  Using adjoining to modeloptionality allows general translation patterns to be learned withoutthe clutter of endless variations of optional material, with extrainformation spliced in as needed.<p>In this paper, we describe a novel method for learning a type ofSynchronous Tree Adjoining Grammar and associated probabilities fromaligned tree/string training data.  We introduce a method ofconverting these grammars to a weakly equivalent tree transducer forefficient decoding.  Finally, we show that adjoining results in anend-to-end improvement of +0.8 BLEU over a baseline statisticalsyntax-based MT model on a large-scale Arabic/English MT task.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 Jun 2009</td>
<td align=left valign=top>Adam Pauls (UC Berkeley)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_Jun_2009');">
Hierarchical Search for Parsing (and Machine Translation)
</a><br>
<span id=abs19_Jun_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Both coarse-to-fine and A* parsing use simple grammars to guide search incomplex ones. We compare the two approaches in a common, agenda-basedframework, demonstrating the tradeoffs and relative strengths of eachmethod. Overall, coarse-to-fine is much faster for moderate levels of searcherrors, but below a certain threshold A* is superior. In addition,we present the first experiments on hierarchical A* parsing, inwhich computation of heuristics is itself guided bymeta-heuristics. Multi-level hierarchies are helpful in bothapproaches, but are more effective in the coarse-to-fine case becauseof accumulated slack in A* heuristics.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>29 May 2009</td>
<td align=left valign=top>Marta Recasens Potau (Universitat de Barcelona)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs29_May_2009');">
Learning-based Coreference Resolution for Spanish and Catalan
</a><br>
<span id=abs29_May_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The task of coreference resolution identifies those expressions in a text that point to the same discourse entity. Natural language applications such as information extraction, question answering and machine translation can greatly benefit from its output (the different pieces of information in connection with the same entity are linked, pronouns are disambiguated, etc.). The task is extremely complex since a number of knowledge sources come into play, from morphology to discourse structure and world knowledge. In this talk I present the results of my PhD research up to now, including the development of two 400k-word corpora for Spanish and Catalan (AnCora) annotated at various levels (morphology, syntax, semantics, pragmatics), a 100k-word corpus for English, and a series of experiments towards building a learning-based coreference resolution system. More specifically, I'll discuss issues concerning the definition of the annotation scheme, the selection of features for machine learning, the effect of sample selection, and I'll introduce CISTELL, the new learning-approach we propose for coreference resolution.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 May 2009</td>
<td align=left valign=top>Victoria Fossum <br> Dirk Hovy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_May_2009');">
Practice talks for NAACL HLT
</a><br>
<span id=abs22_May_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11th flr CR<br>
<b>Abstract:</b> Combining Constituent Parsers (Victoria Fossum: 3:00pm -- 3:30pm)<p>Combining the 1-best output of multiple parsers via parse selection orparse hybridization improves f-score over the best individual parser(Henderson and Brill, 1999; Sagae and Lavie, 2006). We propose three ways to improve upon existing methods for parser combination.<p>---------------------------------------------------------<p>Disambiguation of Preposition Sense Using Linguistically MotivatedFeatures (Dirk Hovy: 3:30pm -- 4:00pm)<p>Classifying polysemous words into their proper sense classes ispotentially useful to any NLP application that needs to extractinformation from text or build a semantic representation of thetextual information. Like instances of other word classes, manyprepositions are ambiguous, carrying different semantic meanings(including notions of instrumental, accompaniment, location, etc.)In this paper, we present a supervised classification approach fordisambiguation of preposition senses. We use the SemEval 2007Preposition Sense Disambiguation datasets to evaluate our system andcompare its results to those of the systems participating in theworkshop. We derived linguistically motivated features from both sidesof the preposition. Instead of restricting     these to a fixed windowsize, we utilized the phrase structure. Testing with five differentclassifiers, we can report an increased accuracy (76.4%) thatoutperforms the best system in the SemEval task.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 May 2009</td>
<td align=left valign=top>David Chiang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_May_2009');">
Practice talks for NAACL HLT
</a><br>
<span id=abs15_May_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 4th flr CR<br>
<b>Abstract:</b> 11,001 New Features for Statistical Machine Translation (David Chiang)- Winner of Best Paper Award at NAACL/HLT 2009<p>We use the Margin Infused Relaxed Algorithm of Crammer et al. to add alarge number of new features to two machine translation systems: theHiero hierarchical phrase based translation system and oursyntax-based translation system. On a large-scale Chinese-Englishtranslation task, we obtain statistically significant improvements of+1.5 BLEU and +1.1 BLEU, respectively. We analyze the impact of the new features and the performance of the learning algorithm.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 May 2009</td>
<td align=left valign=top>Sujith Ravi</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_May_2009');">
Practice talks for NAACL HLT
</a><br>
<span id=abs14_May_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 4th flr CR<br>
<b>Abstract:</b> Talk-1: Learning Phoneme Mappings for Transliteration without Parallel Data<p>We present a method for performing machine transliteration without any parallel resources. We frame the transliteration task as a decipherment problem and show that it is possible to learn cross-language phoneme mapping tables using only monolingual resources.  We compare various methods and evaluate their accuracies on a standard name transliteration task.<p>This is joint work with Kevin Knight.<p>----------------------------------------------------<p>Talk-2: A New Objective Function for Word Alignment<p>We develop a new objective function for word alignment that measures the size of the bilingual dictionary induced by an alignment. A word alignment that results in a small dictionary is preferred over one that results in a large dictionary.  In order to search for the alignment that minimizes this objective, we cast the problem as one of integer linear programming.  We then extend our objective function to align corpora at the sub-word level, which we demonstrate on a small Turkish-English corpus.<p>This is joint work with Tugba Bodrumlu and Kevin Knight.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>08 May 2009</td>
<td align=left valign=top>Andrew Kehler (UCSD)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs08_May_2009');">
Coherence and the (Psycho-) Linguistics of Pronoun Interpretation
</a><br>
<span id=abs08_May_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> More than three decades of research has sought to uncover theprinciples that determine how hearers interpret pronouns in context.This work has focused predominantly on identifying so-called'preferences' or 'heuristics' that hearers utilize based on linguisticproperties of antecedent expressions.  This focus is a departure fromthe type of approach outlined in Hobbs (1979), which argues that themechanisms that drive pronoun interpretation are driven predominantlyby semantics, world knowledge, and inference, with particularreference to how these are used to establish the coherence ofdiscourses.<p>In this talk, I report on new experimental evidence in support of acoherence-driven analysis, and describe how the analysis canaccommodate a range of previous findings suggestive of conflictingpreferences and biases.  Case studies of four commonly-citedpreferences are described, specifically (i) the parallel grammaticalrole preference (e.g., Smyth 1994), (ii) thematic role preferences(e.g., Stevenson et al. 1994), (iii) implicit causality biases (e.g.,Caramazza et al. 1977), and (iv) the subject assignment strategy(e.g., Crawley et al. 1990).  In each case, the experimental resultsoffer an explanation of what the underlying source of the bias is, andpredicts in what contexts evidence for it will surface.<p>These results suggest that pronoun interpretation is incrementallyinfluenced in part by the probabilistic expectations that hearers haveabout how the discourse will be coherently continued.  They are alsoargued to leave various myths by the roadside, e.g., that pronouninterpretation can be profitably thought of as a 'search and match'procedure, and that coherence relations need not be controlled for inexperimental stimuli.<p>This talk includes joint work with Laura Kertz, Hannah Rohde, andJeffrey Elman.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Apr 2009</td>
<td align=left valign=top>Rahul Bhagat</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Apr_2009');">
Learning Paraphrases from Text (Ph.D. Defense practice talk)
</a><br>
<span id=abs17_Apr_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Paraphrases are textual expressions that convey the same meaning using different surface forms. Capturing the variability of language, they play an important role in many natural language applications including question answering, machine translation, and multi-document summarization. In linguistics, paraphrases are characterized by approximate conceptual equivalence. Since no automated semantic interpretation systems available today can identify conceptual equivalence, paraphrases are difficult to acquire without human effort. The aim of this thesis is to develop methods for automatically acquiring and filtering phrase-level paraphrases using a monolingual corpus.<p>Noting that the real world uses far more quasi-paraphrases than the logically equivalent ones, we first present a general typology of quasi-paraphrases together with their relative frequencies. To our knowledge the first one ever. We then present a method for automatically learning the contexts in which quasi-paraphrases obtained from a corpus are mutually replaceable. Knowing that quasi-paraphrases are often inexact because they contain semantic implications which can be directional, we present an algorithm called LEDIR to learn the directionality of quasi-paraphrases. Since semantic classes play a crucial role in our work, we also investigate the use of a semi-supervised clustering algorithm for learning semantic classes.<p>We next investigate the task of learning surface paraphrases, i.e., paraphrases that do not require the use of any syntactic interpretation. Since one would need a very large corpus to find enough surface variations, we use a really large but unprocessed corpus of 150GB (25 billion words) obtained from Google News to do this learning. We show that these paraphrases can be used to learn surface patterns for relation extraction. Finally, we use paraphrases to learn patterns for domain-specific information extraction.<p>Thus, in this thesis we define quasi-paraphrases, present methods to learn them from a corpus, and show that quasi-paraphrases are useful for information extraction.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Mar 2009</td>
<td align=left valign=top>David Chiang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Mar_2009');">
Tutorial on Hadoop
</a><br>
<span id=abs27_Mar_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Hadoop is an open-source implementation of the Map/Reduce framework introduced by Google Research. It is a simple abstraction for describing parallelizable algorithms that admits very efficient execution: in one case, one of my (poorly implemented) algorithms was improved from a typical runtime of 72 hours to 3 hours. I will give a short introduction to Hadoop that is highly colored by my experiences with it and the likely experiences of other natural language processing researchers at ISI. I will show how to run Hadoop on HPC, how to use Hadoop Streaming (which allows implementation in any language you choose), and how to define Map/Reduce algorithms for a few incarnations of a typical NLP task, relative-frequency estimation of a large probability distribution. Input from others who are more experienced with Hadoop than I am is welcome!<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 Mar 2009</td>
<td align=left valign=top>Rutu Mulkar</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_Mar_2009');">
Discovering Causal and Temporal Relations in Biomedical Texts (practice talk for AAAI Spring Symposium)
</a><br>
<span id=abs19_Mar_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 2:30 pm<br>
<b>Location:</b> 4th floor CR<br>
<b>Abstract:</b> In previous work on "Learning by Reading" we successfully extracted entities, states and events from technical natural language descriptions of processes. The research described here is aimed at the automatic discovery of causal and temporal ordering relations among states and events, specifically, among molecular and other events in biomedical articles. We have annotated causal and temporal relations in articles on the cell cycle, and we discuss our annotation guidelines and the issue of inter-annotator agreement. We then describe the natural language parsing and the inference system we use to extract these relations. We have created axioms manually for this system, focusing on temporal, causal and aspectual information and we have used semi-automatic means to augment these axioms. We have evaluated the performance of this system, and the results are promising.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>06 Mar 2009</td>
<td align=left valign=top>Andreas Maletti</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs06_Mar_2009');">
Minimizing Deterministic Weighted Tree Automata
</a><br>
<span id=abs06_Mar_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Weighted tree automata are equivalent to weighted tree grammars, which can be used, for example, to easily model weighted context-free grammars. In constrast to context-free grammars, tree automata work directly on a tree representation and not on strings. We will introduce weighted tree automata and review the important results on minimization of them. For example, it is known that deterministic devices over commutative semifields (commutative semirings with multiplicative inverses) can be effectively minimized. In the main part of the talk, we present the first efficient algorithm for this minimization. If the operations can be performed in constant time, then our algorithm constructs an equivalent minimal (with respect to the number of states) deterministic automaton in time linear in the maximal rank of the input symbols, the number of (useful) transitions, and the number of states of the input automaton.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Feb 2009</td>
<td align=left valign=top>Carlos Busso (USC)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Feb_2009');">
Multimodal Processing of Human Behavior in Intelligent Instrumented Spaces: A Focus on Expressive Human Communication
</a><br>
<span id=abs27_Feb_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Advances in technologies to capture and process multimedia signals are enabling new opportunities for understanding and modeling human behavior, and designing new human-centered applications. Intelligent environments equipped with a range of audio-visual sensors provide suitable means for automatically monitoring and tracking the behavior, strategies and engagement of the participants in multiperson interactions such as meetings, at various levels of interest. We describe a case study of a "Smartroom" being developed at USC in which high-level features are calculated from active speaker segmentations, automatically annotated by our system, to infer the interaction dynamics between the participants. The results show that it is possible to accurately estimate in real-time not only the flow of the interaction, but also how dominant and engaged each participant was during the discussion.<p>Additionally, we describe analysis of human expressive behavior that can be afforded by such audio-visual data. We describe an analysis of the interrelation between facial gestures and speech using a multimodal approach. Using a controlled setting, motion capture technology was used to simultaneously acquire speech and detailed facial information. Our results indicate that the verbal and non-verbal channels of human communication are internally and intricately connected. The interplay is observed across the different communication channels such as various aspects of speech, facial expressions, and movements of the hands, head and body, and is greatly affected by the linguistic and emotional content of the message being communicated. As a result of the analysis, applications in automatic emotion recognition and synthesis of expressive communication are presented.<p>[This research was supported in part by funds from the NSF, NIH, and the Department of the Army]<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>13 Feb 2009</td>
<td align=left valign=top>Joseph Tepperman (Signal Analysis and Interpretation Laboratory, USC)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs13_Feb_2009');">
Estimating Subjective Judgments of Speech on Multiple Levels
</a><br>
<span id=abs13_Feb_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> People make explicit subjective judgments of speech when doing things like tutoring students in a foreign language, or testing a child's reading skills.  On what do we base these judgments, and how can they be made automatically?  The "quality" of speech does not exist on any one scale alone, and is not limited strictly to pronunciation - it is manifested through a multiplicity of simultaneous and interacting cues of various sizes.  In this talk I'll discuss modeling strategies for categorical pronunciation on several scales, cognitive models for estimating student knowledge demonstrated through speech, and applications in the fields of education and speech synthesis.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Jan 2009</td>
<td align=left valign=top>Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Jan_2009');">
Sixty Years of Statistical Machine Translation
</a><br>
<span id=abs30_Jan_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This high-level survey will describe the results of statistical machine translation (SMT) research since 1948. Part of the survey will cover the explosion of work in the past few years that has resulted from intense interest on the part of scientists, funders, and industry. We will also examine the roots of SMT in World War II decipherment activities. Some of the concepts from that era have become core to the field, while others still remain to be picked up.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Jan 2009</td>
<td align=left valign=top>Roger Levy (UCSD)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Jan_2009');">
Noise and memory in rational human language comprehension
</a><br>
<span id=abs23_Jan_2009 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Considering the adversity of the conditions under which linguistic communication takes place in everyday life---ambiguity of the signal, environmental competition for our attention, speaker error, our limited memory, and so forth---it is perhaps remarkable that we are as successful at it as we are.  Perhaps the leading explanation of this success is that (a) the linguistic signal is redundant, (b) diverse information sources are generally available that can help us obtain infer the intended message (or something close enough) when comprehending an utterance, and (c) we use these diverse information sources very quickly and to the fullest extent possible.  This explanation can be thought of as treating language comprehension as a rational, evidential process.  Nevertheless, there are number of prominent phenomena reported in the sentence processing literature that remain clear puzzles for the rational approach.  In this talk I address three such phenomena, whose common underlying thread is an apparent failure to use information available in a sentence appropriately in global or incremental inferences about the correct interpretation of a sentence.  I argue that the apparent puzzle posed by these phenomena for models of rational sentence comprehension may derive from the failure of existing models to appropriately account for the environmental and cognitive constraints---namely, noisy input and limited memory---under which comprehension takes place.  I present two new probabilistic models of language comprehension under noisy input and limited memory, and show that these models lead to solutions to the above puzzles.  More generally, these models suggest how appropriately accounting for environmental and cognitive constraints can lead to a more nuanced and ultimately more satisfactory picture of key aspects of human cognition.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Dec 2008</td>
<td align=left valign=top>Liang Huang (UPenn => Google Research)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Dec_2008');">
Tree-based and Forest-based Translation
</a><br>
<span id=abs17_Dec_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 4th Floor CR<br>
<b>Abstract:</b> What is in common, and what is different, between translating from English to Chinese and compiling C++ into machine code?<p>In this talk I will first introduce a tree-based (aka syntax-directed) paradigm for machine translation, inspired by both human translators and compilers. In this paradigm, a source language sentence is first parsed into a syntactic tree, which is then recursively converted into a target language sentence via tree-to-string transformation rules. Since the translation process is driven by the syntax, this approach resembles the classical "syntax-directed translation" method in compiling theory.<p>However, natural languages are crucially different from programming languages in that they are fundamentally ambiguous. So we don't (and will probably never) have perfect parsers, and parsing errors adversely affect translation quality. To alleviate this problem, an obvious idea is to use the top-k parses, rather than a single 1-best, but this only helps a little bit due to the limited scope of the k-best list. We instead propose a "forest-based approach", which translates a packed forest encoding *exponentially* many parses in a compact (polynomial) space by sharing common subtrees. Large-scale experiments showed very significant improvements (over the 1-best baseline) in terms of translation quality, which outperforms the best reported systems to date. More interestingly, translating a forest of millions of trees is even faster than translating on top-30 individual trees thanks to dynamic programming.<p>This talk includes joint work with Kevin Knight and Aravind Joshi (first part), and with Haitao Mi and Qun Liu (second/third parts).<p><p>Short Bio:<p>Liang Huang recently completed his PhD study at the University of Pennsylvania, co-supervised by Aravind Joshi and Kevin Knight (USC/ISI). He is mainly interested in the theoretical aspects of computational linguistics, in particular, efficient algorithms in parsing and machine translation, generic dynamic programming, and formal properties of synchronous grammars. His thesis develops a set of "forest-based methods" that have been applied to many problems in NLP including k-best parsing, forest rescoring and reranking, and forest-based translation. His awards include an Outstanding Paper Award at ACL 2008, and a University Teaching Award at Penn in 2005.<p>http://www.cis.upenn.edu/~lhuang3/<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Nov 2008</td>
<td align=left valign=top>Daniel Marcu</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Nov_2008');">
The best/worst Speech Recognition, Language Modeling, and Machine Translation ideas
</a><br>
<span id=abs07_Nov_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> A group of 60 researchers have been asked to comment on what they perceive to be<p>- the most important contributions in the fields of speech recognition, language modeling, and machine translation;<p>- past ideas that failed to lead to substantial improvements;<p>- and contributions that are most likely to have a material impact in the future.<p>This talk summarizes the perceptions and trends identified in the collection of answers provided by the researchers.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Oct 2008</td>
<td align=left valign=top>Jens Voeckler</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Oct_2008');">
Parsing XRS with(out) regular expressions
</a><br>
<span id=abs17_Oct_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> If you ever needed to extract information, e.g. LHS, RHS words, features, etc., from an XRS rules, this talk is for you. Over the years, a variety of regular expressions have been used to obtain data from XRS rules. However, in light of recent pipeline efforts, the copy-n-paste culture lead to expressions that were sometimes too complex for the task at hand, unnecessarily slowing down processing steps, or too trivial to work correctly on boundary cases. A unified effort by Steve, David, Wei, Michael and Jens culminated in the NLPRules module for Perl. While the talk centers on the Perl module, and some surprising benchmark results, any language supporting libpcre (perl compatible regular expression) will benefit from the insights, and from knowing the right regular expression for the task at hand.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Oct 2008</td>
<td align=left valign=top>Victoria Fossum + David Chiang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Oct_2008');">
Practice talks for AMTA/EMNLP
</a><br>
<span id=abs14_Oct_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:15 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Using Bilingual Chinese-English Word Alignments to Resolve PP-Attachment Ambiguity in English (practice talk for AMTA)<p>Errors in English parse trees impact the quality of syntax-based MT systems trained using those parses. Frequent sources of error for English parsers include PP-attachment ambiguity, NP-bracketing ambiguity, and coordination ambiguity. Not all ambiguities are preserved across languages. We examine a common type of ambiguity in English that is not preserved in Chinese: given a sequenc "VP NP PP", should the PP be attached to the main verb, or to the object noun phrase? We present a discriminative method for exploiting bilingual Chinese-English word alignments to resolve this ambiguity in English. On a heldout test set of Chinese-English parallel sentences, our method achieves 86.3% accuracy on this PP-attachment disambiguation task, an improvement of 4% over the accuracy of the baseline Collins parser (82.3%).<p>Online Large-Margin Training of Syntactic and Structural Translation Features (practice talk for EMNLP)<p>Minimum-error-rate training (MERT) is a bottleneck for current development in statistical machine translation because it is limited in the number of weights it can reliably optimize. Building on the work of Watanabe et al., we explore the use of the MIRA algorithm of Crammer et al. as an alternative to MERT. We first show that by parallel processing and exploiting more of the parse forest, we can obtain results using MIRA that match or surpass MERT in terms of both translation quality and computational cost. We then test the method on two classes of features that address deficiencies in the Hiero hierarchical phrase based model: first, we simultaneously train a large number of Marton and Resniks soft syntactic constraints, and, second, we introduce a novel structural distortion model. In both cases we obtain significant improvements in translation performance. Optimizing them in combination, for a total of 56 feature weights, we improve performance by 2.6 Bleu on a subset of the NIST 2006 Arabic-English evaluation data.<p>(Joint work with Yuval Marton and Philip Resnik)<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Oct 2008</td>
<td align=left valign=top>Sujith Ravi + Steve DeNeefe</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Oct_2008');">
Practice talks for AMTA/EMNLP
</a><br>
<span id=abs10_Oct_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:15 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Automatic Prediction of Parser Accuracy (practice talk for EMNLP)<p>Statistical parsers have become increasingly accurate, to the point where they are useful in many natural language applications. However, estimating parsing accuracy on a wide variety of domains and genres is still a challenge in the absence of gold-standard parse trees.<p>We propose a technique that automatically takes into account certain characteristics of the domains of interest, and accurately predicts parser performance on data from these new domains. As a result, we have a cheap (no annotation involved) and effective recipe for measuring the performance of a statistical parser on any given domain.(Joint work with Kevin Knight and Radu Soricut)<p><p><p>Overcoming Vocabulary Sparsity in MT Using Lattices  (practice talk for AMTA)<p>Source languages with complex word formation rules present a challenge for statistical machine translation (SMT). In this paper, we take on three facets of this challenge: (1) common stems are fragmented into many different forms in training data, (2) rare and unknown words are frequent in test data, and (3) spelling variation creates additional sparseness problems. We present a novel, lightweight technique for dealing with this fragmentation, based on bilingual data, and we also present a combination of linguistic and statistical techniques for dealing with rare and unknown words. Taking these techniques together, we demonstrate +1.3 and +1.6 BLEU increases on top of strong baselines for Arabic-English machine translation.(Joint work with Ulf Hermjakob and Kevin Knight)<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Sep 2008</td>
<td align=left valign=top>Eugene Charniak (Brown University)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Sep_2008');">
EM Works for Pronoun-Anaphora Resolution
</a><br>
<span id=abs26_Sep_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> EM (the Expectation Maximization Algorithm) is a well known technique for unsupervised learning (where one does not have any hand labeled solutions available, but instead one must learn from the raw text). Unfortunately EM is known to fail to find good solutions in many (most?) applications on which it is tried.  In this talk we present some recent work on using EM to learn how to resolve pronoun-anaphora: determining that "the dog" is the antecedent of "he" and "his" in "When Sally fed the dog he wagged his tail". For this application EM works strikingly well, determining tens of thousands of parameters and resulting in a program that probably produces state of the art results, although because this is preliminary work, and pronoun-anaphora has no standard evaluation metrics, this is just a guess.<p><p>About the Speaker:<p>Eugene Charniak is Professor of  Computer Science. and Cognitive Science at Brown University. He received an A.B. degree in Physics from University of Chicago and a Ph.D. from M.I.T. in Computer Science. He has published four books: Computational Semantics, with Yorick Wilks (1976); Artificial Intelligence Programming (now in a second edition) with Chris Riesbeck, Drew McDermott, and James Meehan (1980, 1987); Introduction to Artificial Intelligence with Drew McDermott (1985); and Statistical Language Learning (1993). He is a Fellow of the American Association of Artificial Intelligence and was previously a Councilor of the organization. His research has always been in the area of language understanding or technologies which relate to it, such as knowledge representation, reasoning under uncertainty, and learning. Over the last few years he has been interested in statistical techniques for language understanding. His research in this area has included work in the subareas of part-of-speech tagging, probabilistic context-free grammar induction, and, more recently, syntactic disambiguation through word statistics, efficient syntactic parsing, and lexical resource acquisition through statistical means.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 Sep 2008</td>
<td align=left valign=top>Fei Sha (USC)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_Sep_2008');">
Large margin based parameter estimation for hidden Markov models
</a><br>
<span id=abs19_Sep_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In many application domains, we face the task of characterizing the distribution of continuous random variables.  For instance, in automatic speech recognition (ASR), these variables are acoustic properties of speech signals.  For such tasks, Gaussian mixture models (GMMs) are widely used as an very effective density estimator. Particularly, in the context of ASR, they are embedded in continuous-density hidden Markov models (CD-HMMs) to yield emission probabilities, i.e., the likelihoods of acoustic observations conditioned on hidden states such as phonemes. Meanwhile, the transition probabilities in CD-HMMs attempt to capture temporal properties of speech signals. Similar modeling choices arise in other applications, for instance, in activity recognition.<p>Various techniques have been developed to estimate the parameters of CD-HMMs. In particular, discriminative techniques such as conditional maximum likelihood and minimum classification error have attracted significant research attention. When carefully and skillfully implemented, they often lead to lower error rates (in speech recognition) than traditional techniques of maximum likelihood estimation.<p>In this talk, I will describe a new discriminative technique that is based on the principle of large margin, a key framework in many machine learning algorithms including support vector machines and boosting. The new technique differs from previous discriminative methods for ASR in the goal of margin maximization. In particular, in our large margin training of CD-HMMs, model parameters are optimized to maximize the gap (or the margin)  between correct and incorrect classifications.  I will present an extensive empirical evaluation of our approach on two benchmark problems in speech recognition: phonetic classification and recognition on the TIMIT speech database.  In both tasks, large margin systems obtain significantly better performance than systems trained by maximum likelihood estimation or competing discriminative frameworks.  An in-depth analysis also reveals someinteresting features of our approach, which contribute to the superior performance.<p>Towards the end of the talk, I will discuss briefly the connection of our work to the structured prediction problems in the machine learning community. I will also discuss the future direction of this line of work and other application potentials.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Aug 2008</td>
<td align=left valign=top>Amittai Axelrod (UW)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Aug_2008b');">
Intern Final Talk: Structural constraints for efficient decoding.
</a><br>
<span id=abs22_Aug_2008b style="display:none;">
<font size=-1>
<b>Time:</b> 3:45 pm - 4:15 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> String-to-tree machine translation decoders are effective but very slow, especially compared to other decoding approaches.  We explore various methods to identify constraints on the search space, with the aim of improving the efficiency of the syntax-based decoder.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Aug 2008</td>
<td align=left valign=top>Catalin Tirnauca (Univ. Rovira i Virgili)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Aug_2008');">
Intern Final Talk:  On the Consistency of Probabilistic Context-Free Grammars
</a><br>
<span id=abs22_Aug_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Probabilistic context-free grammars can describe probability distributions over strings, i.e., the sum of probabilities of all generated strings is 1.This condition is often  called consistency. It has applications in fields of natural language processing such as probabilistic parsing (disambiguate by picking the parse with the highest score), or speech recognition (rank hypotheses returned by a speech recognizer).<p>The talk is a survey of some of the previous results. We investigate how we can determine if a probabilistic context-free grammar is consistent, and if such a test can always be done. Also, we study a method, namely normalization, which guarantees consistent probabilistic context-free grammars. Moreover, we mention briefly some techniques that train probabilistic context-free grammars and guarantee consistency.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>20 Aug 2008</td>
<td align=left valign=top>Kyle Gorman (Penn)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs20_Aug_2008');">
Intern Final Talk:  The Entropy of English given French
</a><br>
<span id=abs20_Aug_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm (NOTE different day and location!)<br>
<b>Location:</b> 11 Small<br>
<b>Abstract:</b> The fundamental task in statistical machine translation (SMT) is tocharacterize the probability of a target sentence given its sourcetranslation; for translating French as English, P(f | e). By applyingBayes Rule, we derive the fundamental theorem of SMT: e maximizingP(e) P(f | e). Advances in SMT come from improving estimations ofthese two terms, or from more efficient ways of searching for optimalsolutions (Brown et al. 1993).<p>In the case of language modeling, Shannon (1949) and Brown et al.(1992) identified upper and lower bounds for the per-character entropyof English, H(e), for humans and machines, respectively. We ask thesame question for SMT, H(e | f), comparing the results for humantranslators and a simple machine baseline based on IBM Model 1. Thesenumbers are the upper and lower bounds for SMT systems trained onparallel data.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>20 Aug 2008</td>
<td align=left valign=top>John DeNero (Berkeley)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs20_Aug_2008b');">
Intern Final Talk: Minimum Risk Decoding over Forests
</a><br>
<span id=abs20_Aug_2008b style="display:none;">
<font size=-1>
<b>Time:</b> 3:45 pm - 4:15 pm (NOTE different day and location!)<br>
<b>Location:</b> 11 Small<br>
<b>Abstract:</b> Minimum Bayes risk (MBR) decoding improves the output ofmachine translation systems by selecting a translation that matches alarge proportion of the k-best hypotheses of a system.  We extend thisidea to apply to packed forests by selecting an output sentence thatmatches a large proportion of all hypotheses in the pruned forest ofderivations from a syntax-based translation system.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 Jul 2008</td>
<td align=left valign=top>Sujith Ravi</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_Jul_2008');">
Deciphering Ciphers Optimally Using Only Minimal Knowledge of the Source Language
</a><br>
<span id=abs18_Jul_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I will be talking about deciphering letter-substitution ciphers *optimally* using only minimal knowledge (bigrams, trigrams, etc.) of the source language, instead of relying on large look-up dictionaries. We also plan to show how our empirical results compare with Shannon's predictions on the equivocation curves and unicity distance measure.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Jul 2008</td>
<td align=left valign=top>Jon May</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Jul_2008');">
Thesis Proposal Practice Talk:  A Weighted Tree Transducer Toolkit for Syntactic Natural Language Processing Models
</a><br>
<span id=abs11_Jul_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Solutions for many natural language processing problems such as speech recognition, transliteration, and  translation have been described as weighted finite-state transducer cascades. The transducer formalism is very useful for researchers, not only for its ability to expose the deep similarities between seemingly disparate models, but also because expressing models in this formalism allows for rapid implementation of real, data-driven systems. Finite-state toolkits can interpret and process transducer chains using generic algorithms and many real-world systems have been built using these toolkits. Current research in NLP makes use of syntax-rich models that are poorly suited to extant transducer toolkits, which process linear input and output. Tree transducers can handle these models, and a weighted tree transducer toolkit with appropriate generic algorithms will lead to the sort of gains in syntax-based modeling that were achieved with string transducer toolkits. In this thesis proposal practice talk I will briefly trace the history of finite-state transducers and automata as they relate to natural language processing and the evolution of formalisms and the toolkits that support them, leading up to motivation for the design and creation of Tiburon, the toolkit referenced in this talk's title. I will describe previous, current, and future work on Tiburon's algorithms and the effectiveness of both algorithms and  software at cleanly representing syntax-based NLP models from the literature and at constructing and evaluating novel models.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>13 Jun 2008</td>
<td align=left valign=top>Ellen Riloff</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs13_Jun_2008');">
Effective Information Extraction with Relevant Regions and Semantic Affinity Patterns
</a><br>
<span id=abs13_Jun_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I will briefly overview the landscape of event-oriented informationextraction (IE) systems and explain why it is especially challengingto learn IE systems without annotated training data. Then I willdescribe one attempt to do so by decoupling the tasks of findingrelevant text regions and applying extraction patterns. First, aself-trained relevant sentence classifier identifies relevant regionsin documents. Second, a "semantic affinity" measure identifiesdomain-relevant extraction patterns.  We further distinguish between"primary" patterns and "secondary" patterns and apply the patternsselectively in the relevant regions.  This approach is weaklysupervised, requiring only a few seed patterns plus relevant andirrelevant (but unannotated) documents for training.  The resulting IEsystem achieves reasonably good performance, despite the fact that therelevant region classifier leaves a lot to be desired.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>06 Jun 2008</td>
<td align=left valign=top>Tom Murray (USC)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs06_Jun_2008');">
Knowledge as a Constraint on Uncertainty for Unsupervised Classification
</a><br>
<span id=abs06_Jun_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk investigates the use of domain knowledge to constrain and improve the unsupervised learning of a classifier, by placing limits or biases on the possible hypotheses for each input. Theoretically, we view the contribution of the knowledge source as a reduction in the uncertainty of the model's decisions, quantified by the resulting conditional entropy of the label distribution given the input corpus. Evaluating on the simple case of an unsupervised HMM tagger, we find surprising levels of improvement from little knowledge, with more stable and efficient training convergence and label assignment, and a high degree of correlation between classification entropy and model performance. We conclude that, while we should always seek better generic models and techniques, for applications in an unsupervised setting, knowledge may still be key.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 May 2008</td>
<td align=left valign=top>Steve DeNeefe</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_May_2008');">
BLEU Sway Issues: one way to get statistical significance, two ways to get a better score, and three ways to thwart them
</a><br>
<span id=abs30_May_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> BLEU the de facto standard for evaluation and development of statistical machine translation systems.  We describe three real-world situations involving comparisons between different versions of the same systems where one can obtain improvements in BLEU scores that are questionable or even absurd. We propose a very conservative modification to BLEU that addresses these issues while improving correlation with human judgements, then explore some deeper modifications that alleviate the problems further.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 May 2008</td>
<td align=left valign=top>David Newman (UCI)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_May_2008');">
Theory and Applications of Topic Modeling
</a><br>
<span id=abs16_May_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Topic models, a class of Bayesian probabilistic models for discretedata, have recently gained popularity in applications ranging fromdocument modeling to computer vision.  Since the introduction ofLatent Dirichlet Allocation (LDA) in 2003, there have been numerousextensions to this archetype.  I will review the theory behind LDA,and discuss subsequent models, including (some of): Correlated TopicModel, Dynamic Topic Model, Hierarchical Topic Model, Special WordsTopic Model, Hierarchical Dirichlet Process Model, Pachinko AllocationMachine, Topics and Syntax Model, Bi-LDA, Author-Topic Model,Supervised Topic Model, Spatial LDA, etc.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 May 2008</td>
<td align=left valign=top>John DeNero (Berkeley)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_May_2008');">
Inference in phrase alignment models
</a><br>
<span id=abs09_May_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Models that align phrases instead of words offer anappealing alternative to the standard relative frequency estimates ofphrase translation probabilities.  But, while some effective wordalignment models (Model 1, Model 2 & HMM) can be estimated tractablywith EM, phrase alignment models cannot.  I'll talk about how to showthat estimation and inference under these models is intractable.Then, I'll present two useful approximation techniques.<p>First, I'll talk about how to cast phrase alignment search as aninteger linear programming (ILP) problem and find the optimalalignment reliably and quickly with off-the-shelf ILP software.  Someapplications of this technique include training phrase alignmentmodels and interpreting the output of word alignment models.<p>Second, we'll look at how to estimate translation probabilities undera phrase alignment model using a Gibbs sampling procedure.  Thesampler has some nice asymptotic convergence properties and also seemsto produce good results in practice. I'll walk through the differentmodels we've trained and how they performed.<p>Time permitting, I'll also talk about some of the ways in which wecould potentially extend this work to syntactic MT.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 May 2008</td>
<td align=left valign=top>Zornitsa Kozareva</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_May_2008');">
Semantic Class Learning from the Web with Hyponym Pattern Linkage Graphs
</a><br>
<span id=abs02_May_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We present a novel approach to weakly supervised semantic class learning fromthe web, using a single powerful hyponym pattern combined with graphstructures, which capture two properties associated with pattern-basedextractions: popularity and productivity. Intuitively, a candidate is popularif it was discovered many times by other instances in the hyponym pattern. Acandidate is productive if it frequently leads to the discovery of otherinstances. Together, these two measures capture not only frequency ofoccurrence, but also cross-checking that the candidate occurs both near theclass name and near other class members. We developed two algorithms that beginwith just a class name and one seed instance and then automatically generate aranked list of new class instances. We conducted experiments on four semanticclasses and consistently achieved high accuracies.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Apr 2008</td>
<td align=left valign=top>David Chiang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Apr_2008');">
Tutorial: Randomized data structures for large statistical NLP models
</a><br>
<span id=abs25_Apr_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Randomized algorithms are those which use randomness to achieve efficient performance with a bounded probability of error; typically, the bound is adjustable and the performance depends on the bound. Randomized data structures, likewise, use randomness to achieve efficient storage with a bounded probability of error. I will give an overview of the use of such data structures, namely, Bloom filters and "Bloomier" filters, for storing very large n-gram language models, and will discuss possibilities for using randomized data structures for other purposes as well.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 Apr 2008</td>
<td align=left valign=top>Rahul Bhagat</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_Apr_2008');">
Learning Paraphrases from Text
</a><br>
<span id=abs18_Apr_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Paraphrases are textual expressions that convey the same meaning using different words. They capture variability, which is a common phenomenon in language. Given this, paraphrases have been shown to be useful in many natural language applications like Question-Answering, Machine Translation, Summarization and Information Retrieval. In this talk, I'll discuss the phenomenon paraphrasing and focus on methods for automatically acquiring paraphrases from text.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Apr 2008</td>
<td align=left valign=top>Jon May</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Apr_2008');">
Syntactic Re-Alignment Models for Machine Translation
</a><br>
<span id=abs11_Apr_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We present a method for improving word alignment for statistical syntax-based machine translation that employs a syntactically informed alignment model closer to the translation model than commonly-used word alignment models. This leads to extraction of more useful linguistic patterns and improved BLEU scores on translation experiments in Chinese and Arabic.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>04 Apr 2008</td>
<td align=left valign=top>Ulf Hermjakob</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs04_Apr_2008');">
Name Translation in Statistical Machine Translation: Learning When to Transliterate
</a><br>
<span id=abs04_Apr_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We present a method to transliterate names in the framework ofend-to-end statistical machine translation. The system is trained tolearn when to transliterate.<p>For Arabic to English MT, we developed and trained a transliterator on abitext of 7 million sentences and Google's English terabyte ngrams andachieved better name translation accuracy than 3 out of 4 professionaltranslators. The talk also includes a discussion of challenges in nametranslation evaluation.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Mar 2008</td>
<td align=left valign=top>Jason Riesa</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Mar_2008');">
Tutorial on Arabic Orthography
</a><br>
<span id=abs25_Mar_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 11:30 am<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This tutorial is intended to provide attendees with working knowledge of the Arabic writing system. No previous experience with Arabic is required. At the end of this tutorial you should be able to read and segment individual Arabic characters, read common ligatures, identify possible affixes on stems, and understand the various lexical normalizations used in Arabic text preprocessing. The focus will be on the formal writing system in printed text for Modern Standard Arabic, although handwriting will be briefly discussed.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 Jan 2008</td>
<td align=left valign=top>Victoria Fossum</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_Jan_2008');">
Using Syntax to Improve Word Alignment Precision for Syntactic Machine Translation
</a><br>
<span id=abs18_Jan_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Automatically word-aligning a parallel bitext in the source and target languages constitutes the first stage of most statistical machine translation pipelines.  Automatic word alignment is error-prone, and produces many incorrect links.  Incorrect links that violate syntactic correspondences interfere with the extraction of string-to-tree transducer rules for syntactic machine translation.  We present an algorithm for identifying and deleting incorrect word alignment links, using features of the extracted rules.  We obtain gains in both alignment quality and translation quality in Chinese-English and Arabic-English translation experiments, relative to a GIZA++ union baseline.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Jan 2008</td>
<td align=left valign=top>Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Jan_2008');">
How to Make EM Do What You Want
</a><br>
<span id=abs11_Jan_2008 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I'll talk about some unsupervised learning experiments -- how I was satisfied with the initial results, how I became very dissatisfied, and how I became (somewhat) satisified again.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Dec 2007</td>
<td align=left valign=top>Marieke van Erp</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Dec_2007');">
MITCH: Mining for Information in Texts from the Cultural Heritage
</a><br>
<span id=abs14_Dec_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Naturalis, the Dutch National Museum of Natural History, harbours one of the largest treasures of the world: the key specimens of millions of animals found throughout the world through centuries of biological expeditions. While the depot where the animals are stored is a technical marvel, Noah's ark of the 21st century, it is hard to search through it. Research in taxonomy, the evolution of life and biodiversity revolves around the specimens in the depot. The main key to accessing the depot are(mostly) handwritten expedition logs and registration books, which are currently being photographed and keyed in to be stored in searchable digital archives. Such digital logs already enable a kind of "Biogoogle" search, but actual research questions are more complicated ("how did this kind of frog develop over the last century in the Amazon rainforests?"), and demand more intelligent handling. This is where the MITCH project comes in.<p>The goal of MITCH is to turn the field logs and registration books into a populated semantic network, in which concepts such as animal specimens are related to all other concepts that define them: where, when, under which circumstances and by whom were they found, who described them first in the academic literature, who prepared them for storage in the Naturalis depot, which registration number was assigned to them, etc. This means that all textual descriptions of a specimen need to be parsed into exactly these concepts and their relations. All of this needs to be  done at a scale that goes far beyond the human capacity, as tens of thousands of digitized but unanalysed textual records are waiting for semantic analysis. This necessitates the use of state-of-the-art machine learning methods that learn from examples automatically.<p>The project addresses its goals on three levels. The basic level is the development and application of automatic data cleaning and markup tools. On top of this, semi-structured textual material such as fieldbook logs and scientific papers, are semi-automatically converted to a searchable knowledge base. Search results are visualised by displaying maps and specimen photos. The conversion phase assumes the active intervention of domain experts, such as collection managers, to correct and steer the automatic extraction  procedure. At the top level, information resources are cross-linked using a domain ontology, populating a semantic network that can be hooked up to any other standardised cultural heritage knowledge base or to a search engine.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 Nov 2007</td>
<td align=left valign=top>Bill Rounds (Michigan and Stanford)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_Nov_2007');">
Constructions, Constraints, Transducers, and TAGs: A unifying view through Feature Logic
</a><br>
<span id=abs02_Nov_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The value of mathematical formalisms for speech recognition, language generation, and machine translation has long been recognized. Not so much work, though, has been spent reconciling these formalisms with linguistic theories. In this talk I'll propose a theoretical descriptive mechanism based on feature logic, which is central to construction and constraint-based linguistic theories like construction grammar and HPSG, and which  can be used to view tree transducers and tree-adjoining grammars as giving rise to a construction-based framework.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 Oct 2007</td>
<td align=left valign=top>Slav Petrov (Berkeley)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_Oct_2007');">
Learning and Inference for Hierarchically Split PCFGs
</a><br>
<span id=abs19_Oct_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 11:30 am<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Treebank parsing can be seen as the search for an optimally refinedgrammar consistent with a coarse training treebank. We describe amethod in which a minimal grammar is hierarchically refined using EMto give accurate, compact grammars. The resulting grammars areextremely compact compared to other high-performance parsers, yet theparser gives the best published accuracies on several languages, aswell as the best generative parsing numbers in English. In addition,we give an associated coarse-to-fine inference scheme which vastlyimproves inference time with no loss in test set accuracy.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Oct 2007</td>
<td align=left valign=top>Jon Patrick (Univ. of Sydney)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Oct_2007');">
Enhancement Technologies for ICU Information Systems
</a><br>
<span id=abs17_Oct_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The School of Information Technologies at the University of Sydney hashad a 3 year partnership with the Intensive Care Unit at the RoyalPrince Alfred Hospital, Sydney. In that time they have managed 8 jointprojects aimed at producing software solutions that enhanceproductivity in the Unit and in some cases enabled entirely newfunctionalities in their information systems. The principle motivationfor the research is the processing of the narratives in clinical notesbut concomitant problems in information systems have also been tackledand the combination of the two disciplines have led to the two relatedprocessing systems to be described in this presentation.<p><p>- Ward Rounds Information Systems (WRIS) & Handovers -The WRIS is designed to support the work of all clinical staff intheir ward rounds activities. The system, when activated,automatically populates from the resident clinical database a proforma report with the most recent relevant data about the patient,such as vital signs, pathology reports, and other diagnosticmeasurements, presented as a web page. The clinical staff then writetheir progress notes into the web page which converts the text toSNOMED CT codes and other relevant concepts and entities. Theclinician is given the opportunity to change any analyses done by theprocessor. This clinician approved data is loaded to the patientrecord. The essential elements of this system, that is computing anextract of the patient record, accepting narrative input, andanalysing the text for coding, is a productivity gain of itself, butmore importantly, also constitutes the beginning of a hospital wideHandovers System for use throughout each step in the patientjourney. This system is being tested at the RPAH ICU in readiness forward usage. The impact of this system in improving the quality andsafety of handovers has the potential to be very significant.<p><p>- Clinical Data Analytics Language (CDAL) -General purpose access to data from clinical information systems,beyond retrieval for point of care work, is needed for many aspects ofthe hospital's work particularly for clinical research, logistics &operational planning, and auditing patient safety. Most currentclinical systems only provide access to data identified in standardreports with no flexibility to make ad hoc enquiries or to pursue newdirections of enquiry. The clinical data analytics language developedenables the expression of any question that can be answered from thedata in the database in a restricted natural language. A prototype ofthe language has been developed for the CareVue information systemused in the ICU at the Royal Prince Alfred Hospital. It provides forthe use of local medical dialects, SNOMED CT terminology including allforms of collective expressions in SNOMED (e.g. infectious diseases),specification of patient groups, a variety of statistical functions,and constraints over any medical variable, Time, and Location. CDAL isgeneral in that it can be bolted on to any clinical information systemand is applicable to any clinical specialisation.<p><p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>12 Oct 2007</td>
<td align=left valign=top>David Talbot (Edinburgh)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs12_Oct_2007');">
Scalable Language Modeling: Breaking the Curse of Dimensionality
</a><br>
<span id=abs12_Oct_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Randomized data structures can help us scale discrete models encountered in NLP. This talk will describe their use in language modeling and present some more general related results.<p>N-gram language models are fundamental to speech recognition and machine translation. Unfortunately, the n-gram parameter space grows exponentially with the dimension of the feature vector. I will describe how randomization can be used to remove the space-dependency of such models on the a priori parameter space.<p>The novel extensions of the Bloom filter that I will present are able to take advantage of the entropy of the distribution of values assigned to feature vectors to save space in a discrete statistical model. I will review some results applying these models to language modeling in machine translation and relate their space-requirements to a novel lower bound on the general problem of querying a map of key/value pairs.<p>No prior knowledge of randomized data structures will be assumed.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Oct 2007</td>
<td align=left valign=top>Sujith Ravi</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Oct_2007');">
Will this parser work with my data? - Predicting Parser Accuracy without Gold-Standard information
</a><br>
<span id=abs05_Oct_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> There are many tools available to the NLP community for Natural Language Parsing, (i.e converting a raw sentence in to a parse-tree). NLP researchers usually use some "off-the-shelf" parser which has been trained on the Wall Street Journal (WSJ) corpora and then apply the WSJ-trained parser to their data. This works in many cases, especially for systems which use data from WSJ or similar corpora. However, in real life applications, the data may be compiled from many different sources and span different genres, and may not be similar to the WSJ corpora in terms of sentence structure, etc . A particular parser might parse well on some corpora and not so well on others. Choosing the right parser for your data may have an impact on the performance of the NLP system as a whole. But in order to measure the accuracy of any parser for a given corpus, we require a set of gold-standard parse trees corresponding to the sentences within the corpus. Generating gold-standard set takes a lot of manual work and in many real-life applications, it is not a feasible  task to generate gold-standard parses for large corpora.<p>We attempted to build a system which can predict the accuracy (in terms of f-measure value) of the Charniak parser (a popular parsing tool) on any given sentence corpus. Without using any additional information (i.e gold std. parses), our system predicts "how accurately the Charniak parser could parse the given corpus". In order to evaluate our system's predictions on a particular corpus, we compute the "Correlation" measure between the "actual accuracies (using Gold-standard)" vs. "predicted accuracies (from our system)" for the given corpus. We tested our system on different corpora and using different methods and will present these results.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>29 Aug 2007</td>
<td align=left valign=top>Carmen Heger (Dresden) <br> Michael Bloodgood (Delaware)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs29_Aug_2007');">
Summer Intern Presentations: Composition of Tree Transducers AND Using the Perceptron Algorithm to Tune Large Numbers of Feature Weights for Syntax-Based Statistical Machine Translation
</a><br>
<span id=abs29_Aug_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Composition of Tree Transducers<p>Since finite state (string) transducers are not expressive enough for many NLPapplications, computational linguistics started to investigate treetransducers for the task of machine translation, for example. Quite somesuccessful work has been done on generalizing results from string transducersto tree transducers. But when it comes to composition results are notsatisfying because generally tree transducers are not closed undercomposition. Still we think that most of the tree transducers used in NLP arecomposable and that is why we defined the problem of the composition for twoindividual transducers instead of the whole class. During the summer westarted with linear nondeleting tree transducers with epsilon rules andapproached an algorithm to decide for two such transducers whether theircomposition is again in the same class.<p>Using the Perceptron Algorithm to Tune Large Numbers of Feature Weights for Syntax-Based Statistical Machine Translation<p>Current state-of-the-art syntax-based statistical machine translationsystems produce many candidate translations out of which the output translationis selected by taking the argmax over all candidates i of &lt;w,f_i&gt; where w is aweight vector and f_i is a vector of the feature values for candidate i. Thefeatures used by the system and their corresponding weights have a major impacton a system's performance.  Currently, Minimum Error Rate Training (MERT) is used totune the weights of the features.  A drawback of this is that it isn't tractableto tune large numbers of feature weights.  I will discuss using the perceptronalgorithm to tune feature weights for statistical machine translation.  If I get interestingresults before my talk, I may also dicsuss new classes of features (potentially very largenumbers of features) that can be used for improving MT performance.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Aug 2007</td>
<td align=left valign=top>Wei Ho (Princeton) <br> Jennifer Gillenwater (Rice)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Aug_2007');">
Summer Intern Presentations: Noisy Language Models AND Context for Syntax-Based Translation Rules
</a><br>
<span id=abs24_Aug_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Noisy Language Models<p>The language models used in statistical machine translation are oftenquite large, requiring significant memory and sometimes pre-processingin order to be utilized effectively. It would be desirable to have amore compact representations of language models while minimizing theimpact on translation quality. Various quantization methods and lossystorage of language models will be presented.<p>Context for Syntax-Based Translation Rules<p>The rules that a translation system employs should be applicable inmany contexts.  This ensures that a rich language is expressible witha minimum number of rules.  However, when rules that are applicable intoo many contexts are combined, they result in nonsensicaltranslations.  How can we keep rules general but constrain the contextof their use?  This summer we explored the approach of constrainingthe context by conditioning on various neighboring elements of eachrule.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Aug 2007</td>
<td align=left valign=top>Anoop Sarkar (Simon Fraser)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Aug_2007');">
Extensions of Regular Tree Grammars and their relation to Tree Adjoining Grammars
</a><br>
<span id=abs16_Aug_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> There is a hierarchy of generative devices that generate trees:starting with regular tree languages (RTLs), which are containedwithin context-free tree languages (CFTLs), and so on.  The stringyield of the RTLs is exactly the set of Context-Free Languages,while the yield of the CFTLs is exactly the set of Indexed Languages.In this talk we introduce Adjoining Tree Languages (ATLs) which sitin between RTLs and CFTLs.<p>The yield of ATGs is exactly the set of Tree-Adjoining Languages.Just like RTGs are stronger than CFGs, ATGs are stronger than TAGs.In addition we will show that the ATG notation simplifies many ofthe foundational proofs for TAGs including proofs of the closureproperties. In particular, ATLs do not use adjunction constraints,and thus are much easier to understand than TAGs.<p>We compare ATGs with previously proposed simplifications of CFTGs,called monadic simple CFTGs, which also have been shown to be weaklyequivalent to TAG (i.e. they generate the same set of stringlanguages). We consider the question of whether these two weaklyequivalent formalisms are strongly equivalent (i.e. generate exactlythe same set of tree languages).<p>Finally, we will show that the standard definition used forprobabilistic TAG is (surprisingly) very different from the naturaldefinition of probabilistic ATL. Using an example of PP-attachmentambiguity we show that the two probabilistic models are differentfrom each other.<p>About the speaker:<p>Anoop Sarkar is an assistant professor in the Department of ComputingScience at Simon Fraser University. He received his PhD in 2002from the Department of Computer and Information Science at theUniversity of Pennsylvania, with Prof. Aravind Joshi as his advisor.His research work is on machine learning, especially semi-supervisedlearning, applied to the processing of natural language and stochasticformal grammars.<p>Anoop Sarkar's web-page: <a href=http://www.cs.sfu.ca/~anoop/> http://www.cs.sfu.ca/~anoop</a><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Jun 2007</td>
<td align=left valign=top>Alex Fraser</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Jun_2007');">
Getting the structure right for word alignment: LEAF
</a><br>
<span id=abs15_Jun_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 11:00 am<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Automatic word alignment is the problem of automatically annotatingparallel text with translational correspondence. Previous generativeword alignment models have made structural assumptions such as the1-to-1, 1-to-N, or phrase-based consecutive word assumptions, whileprevious discriminative models have either made one of theseassumptions directly or used features derived from a generative modelusing one of these assumptions. We present a new generative alignmentmodel which avoids these structural limitations, and show that it iseffective when trained using both unsupervised and semi-supervisedtraining methods. Experiments show strong improvements in wordalignment accuracy and usage of the generated alignments inhierarchical and phrasal SMT systems improves the BLEU score.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Jun 2007</td>
<td align=left valign=top>Donghui Feng</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Jun_2007b');">
Extracting Data Records from Unstructured Biomedical Full Text
</a><br>
<span id=abs15_Jun_2007b style="display:none;">
<font size=-1>
<b>Time:</b> 11:00 am - 11:30 am<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In this paper, we address the problem of extracting data records andtheir attributes from unstructured biomedical full text. There hasbeen little effort reported on this in the research community. Weargue that semantics is important for record extraction orfiner-grained language processing tasks. We derive a data recordtemplate including semantic language models from unstruc-tured textand represent them with a dis-course level Conditional Random Fields(CRF) model. We evaluate the approach from the perspective ofInformation Extrac-tion and achieve significant improvements on systemperformance compared with other baseline systems.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>08 Jun 2007</td>
<td align=left valign=top>Jonathan May</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs08_Jun_2007b');">
Bisimulation Minimisation for Weighted Tree Automata
</a><br>
<span id=abs08_Jun_2007b style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We describe existing forward and backward bisimulation minimisationalgorithms for nondeterministic automata and extend these algorithmsto weighted tree automata. The extended algorithms, which work for allsemirings, retain the time complexity of their counterparts forunweighted tree automata for additively cancellative semirings, andare only slightly higher (linear instead of logarithmic in the numberof states) on other semirings. We describe the effectiveness of animplementation of these algorithms on a typical task in naturallanguage processing.<p>This is joint work with Johanna Hogberg, Umea University and AndreasMaletti, Technische Universitat Dresden.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>08 Jun 2007</td>
<td align=left valign=top>Liang-Chih Yu (Cheng Kung U)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs08_Jun_2007');">
Topic Analysis for Psychiatric Document Retrieval (Practice Talk for ACL)
</a><br>
<span id=abs08_Jun_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Psychiatric document retrieval attempts to help people to efficientlyand effectively locate the consultation documents relevant to theirdepressive problems. Individuals can understand how to alleviate theirsymptoms according to recommendations in the relevant documents. Thiswork proposes the use of high-level topic information extracted fromconsultation documents to improve the precision of retrievalresults. The topic information adopted herein includes negative lifeevents, depressive symptoms and semantic relations between symptoms,which are beneficial for better understanding of users'queries. Experimental results show that the proposed approach achieveshigher precision than the word-based retrieval models, namely thevector space model (VSM) and Okapi model, adopting word-levelinformation alone.<p>About the speaker:<p>Liang-Chih Yu (<a href=http://www.isi.edu/~liangchi>http://www.isi.edu/~liangchi</a>) isnow a visiting student in the Information Sciences Institute (ISI) ofUniversity of Southern California (USC). My host advisor is Dr. EduardHovy. I am also a PhD candidate in the Department of Computer Scienceand Information Engineering, National Cheng Kung University, Tainan,Taiwan. My advisor is Dr. Chung-Hsien Wu. My research interestsinclude natural language processing, text mining, informationretrieval, ontology construction, spoken dialogue system.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>01 Jun 2007</td>
<td align=left valign=top>Andrew S. Gordon</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs01_Jun_2007b');">
Generalizing Semantic Role Annotations Across Syntactically Similar Verbs
</a><br>
<span id=abs01_Jun_2007b style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Large corpora of parsed sentences with semantic role labels (e.g. PropBank)provide training data for use in the creation of high-performance automaticsemantic role labeling systems. Despite the size of these corpora,individual verbs (or rolesets) often have only a handful of instances inthese corpora, and only a fraction of English verbs have even a singleannotation. In this paper, we describe an approach for dealing with thissparse data problem, enabling accurate semantic role labeling for novelverbs (rolesets) with only a single training example. Our approach involvesthe identification of syntactically similar verbs found in PropBank, thealignment of arguments in their corresponding rolesets, and the use of theircorresponding annotations in PropBank as surrogate training data.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>01 Jun 2007</td>
<td align=left valign=top>Jingbo Zhu</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs01_Jun_2007');">
Active Learning for Word Sense Disambiguation with Methods for Addressing the Class Imbalance Problem
</a><br>
<span id=abs01_Jun_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In this paper, we analyze the effect of resampling techniques,including under-sampling and over-sampling used in active learning forword sense disambiguation (WSD). Experimental results show thatunder-sampling causes negative effects on active learning, butover-sampling is a relatively good choice. To alleviate thewithin-class imbalance problem of over-sampling, we propose abootstrap-based over-sampling (BootOS) method that works better thanordinary over-sampling in active learning for WSD. Finally, weinvestigate when to stop active learning, and adopt two strategies,max-confidence and min-error, as stopping conditions for activelearning. According to experimental results, we sug-gest a predictionsolution by considering max-confidence as the upper bound andmin-error as the lower bound for stopping conditions.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 May 2007</td>
<td align=left valign=top>Wei Wang (Language Weaver)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_May_2007');">
Binarizing Syntax Trees to Improve Syntax-Based Machine Translation Accuracy
</a><br>
<span id=abs25_May_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We show that phrase structures in Penn Treebank style parsesare not optimal for syntax-based machine translation. Weexploit a series of binarization methods to restructure thePeen Treebank style trees such that syntactified phrasessmaller than Penn Treebank constituents can be acquired andexploited in translation. We find that by employing the EMalgorithm for determining the binarization of a parse treeamong a set of alternative binarizations gives us the besttranslation result.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 May 2007</td>
<td align=left valign=top>Feng Pan</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_May_2007');">
Computing Semantic Similarity between Skill Statements for Approximate Matching
</a><br>
<span id=abs18_May_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> (This will be an extended version of the talk for NAACL-HLT 2007. It'sbased on my summer internship work at IBM T.J. Watson Research Centerlast year.)<p>The project aimed to address the problems encountered when trying tomatch available employees to open job positions, based on skillmatches. Currently, job search applications, like IBM's ProfessionalMarketplace, only find exact matches. A skill affinity computation isdesired to allow searches to be expanded to related/similar skills,and return more potential matches.<p>In this talk, I will explore the problem of computing text similaritybetween verb phrases describing skilled human behavior for the purposeof finding approximate matches. Four parsers (Charniak's parser,Stanford's parser, IBM XSG slot grammar parser, and Lin's MINIPAR) areevaluated on a corpus of skill statements extracted from anenterprise-wide expertise taxonomy. A similarity measure utilizingcommon semantic role features extracted from parse trees was foundsuperior to an information-theoretic measure of similarity andcomparable to the level of human agreement.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 May 2007</td>
<td align=left valign=top>Steve DeNeefe</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_May_2007');">
What Can Syntax-based MT Learn from Phrase-based MT?
</a><br>
<span id=abs11_May_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We compare and contrast the strengths and weaknesses of a syntax-basedmachine translation model with a phrase-based machine translationmodel on several levels.  We briefly describe each model, highlightingpoints where they differ.  We include a quantitative comparison of thephrase pairs that each model has to work with, as well as the reasonswhy some phrase pairs are not learned by the syntax-based model.  Wethen propose improvements to the syntax-based extraction techniques tocapture more phrases.  We also compare the translation accuracy forall variations.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>04 May 2007</td>
<td align=left valign=top>Sheelagh Carpendale (Calgary)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs04_May_2007');">
Information Visualization and Collaboration
</a><br>
<span id=abs04_May_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Consider Donald Norman's quote, "The power of the unaided mind ishighly overrated. Without external aids, memory, thought, andreasoning are all constrained. But human intelligence is highlyflexible and adaptive, superb at inventing procedures and objects thatovercome its own limits. The real powers come from devising externalaids that enhance cognitive abilities." (Norman, 1993) Common methodsfor externalization include making sketches on whatever happens to behandy -- paper napkins, program margins, etc. -- and/or finding acolleague or two to discuss the problem with. It would seem then, thatvisualization and collaboration are natural possibilities for creatingpositive cognitive aids. I will discuss our approach to developinginteractive information visualizations both to support individuals andsmall groups of collaborators and briefly describe some of our recentresults.<p>About the speaker:<p>Sheelagh Carpendale holds a Canada Research Chair in InformationVisualization at the University of Calgary. Her research focuses onthe visualization, exploration and manipulation of information;visualizing such topics as ecological dynamics, uncertainty ininformation, social and communication information and investigatingthe development of information visualization environments that supportcollaboration. Dr. Carpendale's research in information visualizationand interaction design draws on her dual background in ComputerScience (BSc. and Ph.D. Simon Fraser University) and Visual Arts(Sheridan College, School of Design and Emily Carr, College of Art).<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>20 Apr 2007</td>
<td align=left valign=top>Christopher Collins (Toronto)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs20_Apr_2007');">
Information Visualization to Support Computational Linguistics
</a><br>
<span id=abs20_Apr_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We present a survey of resent research into using information visualizationto reveal new insights about linguistic data.  Our recent work includesusing WordNet hyponymy as a basis for document visualization and visualizingthe uncertainty in machine translation in an instant messaging chatcontext.  We will present our preliminary findings and prototypevisualization for machine translation data resulting from a week ofcollaboration with ISI researchers.<p>About the speaker:<p>Christopher Collins is a PhD candidate in information visualization andcomputational linguistics at the University of Toronto.  He works with Prof.Gerald Penn and Prof. Sheelagh Carpendale (University of Calgary).<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Mar 2007</td>
<td align=left valign=top>Ido Dagan (Bar-Ilan U)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Mar_2007');">
Textual entailment as a framework for applied semantics
</a><br>
<span id=abs30_Mar_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We have recently proposed Recognizing Textual Entailment (RTE) as ageneric task that captures major semantic inferences across differentnatural language processing applications. The talk will first reviewthe motivation and definition of the textual entailment task and thePASCAL RTE-1,2&3 Challenges benchmarks. Then we will demonstratedirections for building textual entailment systems, based on knowledgeacquisition and inference, and for utilizing them within concreteapplications. Furthermore, we suggest that textual entailment modelingmay become a comprehensive framework for applied semanticsresearch. Such framework introduces useful variants of known semanticproblems and highlights important tasks which were hardly investigatedso far at an applied computational level. The semantic modelingperspective will be illustrated in more detail by a case study for anentailment-based variant of word sense disambiguation.<p>About the speaker:<p>Ido Dagan is a Senior Lecturer at the Department of Computer Scienceat Bar Ilan University, Israel. His areas of interest are largelywithin empirical NLP, particularly empirical approaches for appliedsemantic processing. In the last few years Ido and his colleaguesintroduced <i>textual entailment</i> as a generic framework for appliedsemantic inference and have organized the first three rounds of thePASCAL Recognizing Textual Entailment Challenges. Ido received hisPh.D. from the Technion. He has been a research fellow at the IBMHaifa Scientific Center and a Member of Technical Staff at AT&T BellLaboratories. During 1998-2003 he was co-founder and CTO ofFocusEngine and VP of Technology of LingoMotors.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Mar 2007</td>
<td align=left valign=top>Hermann Helbig (U at Hagen, Germany)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Mar_2007');">
Multilayered Extended Semantic Networks as a Knowledge Representation Paradigm and Interlingua for Meaning Representation
</a><br>
<span id=abs23_Mar_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 4 CR<br>
<b>Abstract:</b> The talk gives an overview of  Multilayered Extended Semantic Networks(abbreviated MultiNet), which is one of the most comprehensivelydescribed knowledge representation paradigms used as a semanticinterlingua in large-scale NLP applications and for linguisticinvestigations into the semantics and pragmatics of naturallanguage. As with other semantic networks, concepts are represented inMultiNet by nodes, and relations between concepts are represented asarcs between these nodes. Additionally to that, every node isclassified according to a predefined conceptual ontology forming ahierarchy of sorts, and the nodes are embedded in a multidimensionalspace of layer attributes and their values. MultiNet provides a set ofabout 150 standardized relations and functions which are described ina very concise way including an axiomatic apparatus, where the axiomsare classified according to predefined types. The representationalmeans of MultiNet claim to fulfill the criteria of universality,homogeneity, and cognitive adequacy. In the talk, it is also shown,how MultiNet can be used for the semantic representation of differentsemantic phenomena. To overcome the quantitative barrier in buildinglarge knowledge bases and semantically oriented computational lexica,MultiNet is associated with a set of tools including a semanticinterpreter NatLink for automatically translating natural languageexpressions into MultiNet networks, a workbench LIA for the computerlexicographer, and a workbench MWR for the knowledge engineer formanaging and graphically manipulating semantic networks. Theapplications of MultiNet as a semantic interlingua range from naturallanguage interfaces to the Internet and to dedicated databases, overquestion-answering systems, to systems for automatic knowledgeacquisition.<p>About the speaker:<p>Prof. Helbig is head of the chair Intelligent Information and CommunicationSystems at the University of Hagen, Germany. His main research areas areKnowledge Representation, Semantic Natural Language Processing, andQuestion-Answering.<p>A CV can be found <a href="slides/CV-En-HH.pdf"> here</a>.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 Mar 2007</td>
<td align=left valign=top>Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_Mar_2007');">
The Voynich Manuscript
</a><br>
<span id=abs09_Mar_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The medieval Voynich Manuscript has been called "the mostmysterious document in the world".  Its pages contain bizarre drawingsof strange plants and astrological diagrams, as well as an undecipheredscript of 20,000 running words, written in a character set that has neverbeen seen elsewhere.  Its origin is also controversial, with many theoriesabounding.  I will describe the document, show samples, explain where itmay have come from, and present some properties of the text.<p>This will more of a history/mystery talk thana computer science talk.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Jan 2007</td>
<td align=left valign=top>Gerald Penn (Toronto)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Jan_2007');">
The Quantitative Study of Writing Systems
</a><br>
<span id=abs26_Jan_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> If you understood all of the world's languages, you would still not beable to read many of the texts that you find on the world wide web,because they are written in non-Roman scripts -- often ones that havebeen arbitrarily encoded for electronic transmission in the absence ofan accepted standard.  This very modern nuisance reflects a dilemma asancient as writing itself: the association between a language as it isspoken and its written form has a sort of internal logic to it that wecan comprehend, but the conventions are different in every individualcase --- even among languages that use the same script, or betweenscripts used by the same language.  This conventional associationbetween language and script, called a <i>writing system</i>, is indeedreminiscent of the Saussurean conception of language itself, aconventional association of meaning and sound, upon which modernlinguistic theory is based.  Despite linguists' reliance upon writingto present and preserve linguistic data, however, writing systems werea largely forgotten corner of linguistics until the 1960s, when Gelbpresented their first classification.<p>This talk will describe recent work that aims to place the study ofwriting systems upon a sound computational and statistical foundation.While archaeological decipherment may eternally remain the holy grailof this area of research, it also has applications to speechsynthesis, machine translation, and multilingual document retrieval.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>12 Jan 2007</td>
<td align=left valign=top>Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs12_Jan_2007');">
Capturing Natural Language Transformations
</a><br>
<span id=abs12_Jan_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Knowledge representation is hard.  As natural language scientists andengineers, we'd like something that<p>- is expressive enough to capture how natural language works<p>- permits tractable inference<p>- admits learning algorithms for automatic knowledge acquisition<p>- leads to modular system construction<p>This talk will look at knowledge representation for capturing naturallanguage transformations.  A lot of what we do falls into thiscategory.  Examples of transformations include language translation(French to English), question answering (Question to Answer),transliteration (foreign script to Roman alphabet), summarization(long text to short text), parsing (string to tree), languagegeneration (meaning to string), etc.<p>I'll show various knowledge formats (starting with simple finite-statetransducers) and show how they stack up on the 4 criteria above, usingtheorems and examples.  We'll see that different types of tree andstring automata lead to good behavior on various subsets of the 4criteria, but getting 4 out of 4 is still elusive.<p>This is a Krazy Theory talk -- since this kind of talk should not goon and on, I promise to finish within 50 minutes.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Jan 2007</td>
<td align=left valign=top>Beata Klebanov (Hebrew U)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Jan_2007');">
Experimental and Computational Investigation of Lexical Cohesion in Texts
</a><br>
<span id=abs05_Jan_2007 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Lexical cohesion refers to structure created in a text by use of words withrelated meanings. Apart from its importance in theoretical and appliedlinguistics, lexical cohesion detection is used in NLP tasks like topicsegmentation, extractive summarization, spelling correction, etc.  However, theintuitive potential of lexical cohesion for such tasks is often not realized inpractice, possibly due to shortcomings of detection algorithms.<p>I will briefly describe an experiment with readers aimed at providing reliabledata for a computational investigation of lexical cohesion. We then discuss anumber of informative features for cohesion detection, drawing on sources likeWordNet, distributional information, free associations, and the structure ofinformation in  the text itself.  Finally, I report experimentswith supervised learning of lexical cohesion.<p>About the speaker:<p>Beata Beigman Klebanov is a PhD candidate at the Hebrew University of Jerusalem,Israel, currently a visiting scholar at Northwestern University. Beata'sinterests are in experimental, computational and applied research in textpragmatics.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Dec 2006</td>
<td align=left valign=top>Jerry Hobbs</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Dec_2006');">
When Will Computers Understand Shakespeare?
</a><br>
<span id=abs15_Dec_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In this talk I will examine problems encountered in coming to somekind of understanding of one sonnet by Shakespeare (his 64th), askwhat it would take to solve these problems computationally, andsuggests routes to the solution.  The general conclusion is that weare closer to this goal as one might think.  Or are we?<p>Bio:<p>Jerry Hobbs is famous primarily for having an office next to KevinKnight's and a parking space next to Ed Hovy's.  He has readeverything of Shakespeare's that survives, including his will andplays of dubious authorship.  But that was all a long time ago.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Dec 2006</td>
<td align=left valign=top>Liang Huang (Penn)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Dec_2006');">
Faster Decoding with Synchronous Grammars and n-gram Language Models
</a><br>
<span id=abs14_Dec_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 1:30 pm - 3:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> A major obstacle in syntax-based machine translation is theprohibitively large search space for decoding with an integratedlanguage model. We develop faster approaches for this problem basedon lazy algorithms for k-best parsing. When comparing againstChiang's technique of cube pruning, our method runs up to twice asfast without making more search errors or decreasing translationaccuracy as measured by BLEU. We demonstrate the effectiveness of thealgorithm on a large-scale translation system.<p>Interestingly, these techniques can be applied to speed up bilexicalparsing as well, where the (bi-) lexical probabilities can be viewedas n-gram probabilities that causes non-monotonicity. This methodfits naturally into the coarse-to-fine grained multi-pass parsingschemes.<p>To push this direction even further, we can generalize cube and lazycube pruning as generic tools for reducing complicated search spaces,as alternatives to the well-known A* and annealing techniques.<p>This is joint work with David Chiang (ISI).<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Nov 2006</td>
<td align=left valign=top>Mark Hopkins (Potsdam)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Nov_2006');">
Towards the Effective Exploitation of Syntax in Machine Translation
</a><br>
<span id=abs27_Nov_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We discuss preliminary work on a possible approach to exploitingsyntax in an effective way for machine translation. The drivingguideline is to devise a machine translation system that can performeffectively, given a very limited quantity of parsed training data.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Nov 2006</td>
<td align=left valign=top>David DeVault (Rutgers)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Nov_2006');">
Scorekeeping in an Uncertain Language Game
</a><br>
<span id=abs17_Nov_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Practical dialogue systems must exploit context to interpret userutterances correctly.  Received views of context and coordination inpragmatic theory equate utterance context with the occurrentsubjective states of interlocutors using notions like common knowledgeor mutual belief.  We argue that these views are not well suited forpractical modeling due to the uncertainty and robustness of contextdependence in human-human dialogue.  We present an alternativecharacterization of utterance context as objective and normative.  Onthis view, an interlocutor's representation of context reflectsprivate uncertainty about the true objective context as determined byprior speaker meanings.  As conversation moves forward, new utterancesprovide interlocutors with retrospective insight about each other'sprior meanings and therefore about what the true context really is.This view reconciles the need for uncertainty with received intuitionsabout coordination, and can directly inform computational approachesto dialogue.<p>Joint work with Matthew Stone, Rutgers and Rich Thomason, Michigan<p>About the Speaker:<p>David DeVault is a Ph.D. candidate in the Department of ComputerScience at Rutgers University.  He holds a B.S. in Engineering andApplied Science from the California Institute of Technology and anM.A. in Philosophy from Rutgers University.  David's research aims todevelop techniques to allow computational agents to participate inflexible task-oriented conversations with human beings.  His recentwork has drawn on design challenges encountered in building such anagent to try to articulate practical, learnable, and theoreticallysatisfying representations of context, utterance meaning, and speakerintention for implemented conversational systems.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>03 Nov 2006</td>
<td align=left valign=top>Jens-Soenke Voeckler</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs03_Nov_2006');">
perl part 2 - advanced magick
</a><br>
<span id=abs03_Nov_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Since part 1 of the Perl tutorial didn't cover the juicy bits (like aunique function in Perl), based on feedback from participants, I amoffering a part 2 "Perl - Advanced Magick" covering:<p>o the slides from roughly page 40- The Schwartzian Transform- Dissecting a programo What to do, if you do need popen or backticks?o OO Perl - a starto C embedding - definitely only a "start here"o Useful recipes, e.g. interpolating variables in configurationscripts from Perl values.<p>If there is something you are especially interested in seeing, pleasesend me an email<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Oct 2006</td>
<td align=left valign=top>Jens-Soenke Voeckler</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Oct_2006');">
perl - how to use it, not abuse it
</a><br>
<span id=abs23_Oct_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 12:00 pm - 1:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> If you speak a little perl, are an occasional perl-scripter, andwould like to know more about how to use it as a (p)ortable, (e)fficient, and (r)eadible (l)anguage, you may be interested in mybrown bag (read: bring your own) lunch seminar:<p>I will talk about using Perl in a portable fashion, the environmentit is run in, and how avoid common mistakes and misconceptions. Perloffers more than a thousand ways to solve a problem, but some aremore portable or more efficient than others. If time permits, simplehands-on examples can be tried out during the talk, so power forlaptops will be provided.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>29 Sep 2006</td>
<td align=left valign=top>Ashish Venugopal (CMU)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs29_Sep_2006');">
Delayed LM Intersection and Left-to-Right N-Best Extraction for Syntax-Based MT
</a><br>
<span id=abs29_Sep_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We begin by describing a set of pruning constraints that are appliedin the literature to effectively restrict the search space ofsynchronous PCFGs intersected with target language model contexts. Weapply these constraints to non-binarized grammars with a large numberof non-terminals and demonstrate effective parsing within theframework of Wu, 97.<p>We then present a novel parsing approach that avoids language modelcontext intersection during parsing in favor of language model drivenn-best list extraction. The parsing step produces a sentencespanning parse forest which is explored in left-to-right target orderby the N-Best extraction method.<p>This method avoids lossy pruning during the parsing process, searchinga much larger effective parse space than practically possible in thefull intersection scenario, and has the important benefit of allowingintegration of a high order language within the N-Best search process,rather than only in parse re-scoring.<p>We demonstrate the impact of this parsing approach using the SPCFGapproach described in Zollmann, Venugopal, Vogel 06, which is similarto Galley et al., 04 and compare performance against fullintersection.<p>This is joint work with Andreas Zollmann<p>About the Speaker:<p>Ashish Venugopal is a Ph.D candidate at the Language TechnologiesInstitute at Carnegie Mellon University, and holds B.S (SCS,Univ. Honors), M.S degrees from the same institution. He is a SeibelScholar and has received the annual Graduate Student Teaching Award atCarnegie Mellon. His research focus is on syntax augmented machinetranslation.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Sep 2006</td>
<td align=left valign=top>Eduard Hovy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Sep_2006');">
Toward a 'Science' of Annotation: Experiences from OntoNotes
</a><br>
<span id=abs22_Sep_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> As machine learning algorithms and their application for NLP becomebetter understood, attention turns toward the production of annotatedcorpora to which they can be applied.  Numerous phenomena presentthemselves for annotation, including aspects in lexical semantics,discourse, pragmatics, and dialogue.  But several questionsimmediately must be answered:<p>1. How does one obtain a balanced corpus to annotate?  What is abalanced corpus?<p>2. How does one decide which aspects to annotate? How does oneadequately express the theory behind the phenomena in simple annotation steps?<p>3. Which annotators does one hire?  How does one ensure that they are adequately trained?<p>4. How does one establish a simple, fast, and trustworthy annotationprocedure?  What interfaces does one build?  How does one ensure thatthe interfaces do not affect the annotation results?<p>5. How does evaluate the results? What are the appropriate agreementmeasures?  At which cutoff points should one re-do the annotations?How does one ensure improvement?<p>6. How should one formulate and store the results?  How does oneensure compatibility with other existing resources?  How does one makeresults available for best impact?<p>7. How does one report the annotation effort and results?  How doesone actually get a paper on this work published at an importantconference?  What should the paper contain?<p>Despite their being so basic, there is almost no established procedureor standard set of answers to these questions today.  In this talk Idiscuss some of these aspects, pointing to the lessons learned in theongoing OntoNotes project (joint with BBN, the University of Colorado(PropBank), the University of Pennsylvania (Treebank), and ISI).<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Aug 2006</td>
<td align=left valign=top>Jason Riesa</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Aug_2006b');">
Minimally Supervised Morphological Segmentation with Applications to Machine Translation
</a><br>
<span id=abs25_Aug_2006b style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Inflected languages in a low-resource setting present a data sparsity problem forstatistical machine translation. In this work, we present a minimallysupervised algorithm for morpheme segmentation on Arabic dialectswhich reduces unknown words at translation time by over 50%, totalvocabulary size by over 40%, and yields a significant increase inBLEU score over a previous state-of-the-art phrase-based statistical MT system.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Aug 2006</td>
<td align=left valign=top>Victoria Fossum (Michigan)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Aug_2006');">
Improving Precision of Word Alignments Using GHKM Syntax-Based Rule Extraction
</a><br>
<span id=abs25_Aug_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Noisy word alignments negatively affect the quality of the translationrules extracted by the ISI syntax-based MT system.  In the literature,alignment is typically treated as a separate process from subsequentstages in the MT pipeline.  By contrast, we allow rule extraction toguide the alignment process.<p>We present an unsupervised algorithm for identifying and removing "bad"links using GHKM syntax-based rule extraction.  We show thatwe can improve upon the precision of GIZA union (measured against a goldstandard set of manually aligned Chinese-English sentence pairs),while only decreasing recall slightly.<p><p>(Note: This is part of the Summer Intern Series)<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Aug 2006</td>
<td align=left valign=top>Oana-Diana Postolache</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Aug_2006');">
Towards combining Searn and Syntax-Based Machine Translation (SBMT)
</a><br>
<span id=abs23_Aug_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk is about modeling the Syntax-Based Machine Translation(SBMT) problem within the Searn (Search & Learn) framework developed by Hal Daume inhis PhD thesis. I will present the way we define the states, actionsand the search space and how to implement the cost function.<p><p>(Note: This is part of the Summer Intern Series)<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Aug 2006</td>
<td align=left valign=top>Joseph Turian (NYU)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Aug_2006b');">
Speeding-up Syntax-based Decoding
</a><br>
<span id=abs23_Aug_2006b style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> TBA<p>(Note: This is part of the Summer Intern Series)<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 Aug 2006</td>
<td align=left valign=top>Chenhai Xi</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_Aug_2006');">
Name Entity Transliteration Discovery from Large Bilingual Comparable Corpora
</a><br>
<span id=abs18_Aug_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In this summer project, we investigate a scalable method to extractChinese-English name transliterations from large comparable corpora,which consist of two languages discussing same or similar topics. We showthat bigram Jaccard coefficient is a good similarity method to compare Englishand Chinese names, at Chinese pronunciation (Pinyin) level. Based on this phoneticsimilarity score, an efficient randomized algorithm is then used tofind name pair candidates from English and Chinese lists. Finally, contextinformation, such as dates, frequency, place and titles are combined with thephonetic similarity to improve the accuracy of the name pairs list.<p>(Note: This is part of the Summer Intern Series)<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Aug 2006</td>
<td align=left valign=top>Idan Szpektor (Bar-Ilan U)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Aug_2006');">
Textual Entailment: Framework, Learning and Applications
</a><br>
<span id=abs11_Aug_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Textual Entailment has been proposed recently as a generic frameworkfor modeling semantic variability in many Natural Language Processingapplications, such as Question Answering, Information Extraction,Information Retrieval and Document Summarization. The TextualEntailment relationship holds between two text fragments, termed textand hypothesis, if the truth of the hypothesis can be inferred fromthe text.<p>In this talk, the Textual Entailment framework will be introduced.I'll then present an algorithm for large-scale Web-based acquisitionof entailment rules, a type of knowledge needed for robust inference.Finally, I will present an unsupervised Relation Extraction approachbased on the Textual Entailment framework.<p>About the speaker:<p>Idan Szpektor is a PhD student under the supervision of Dr. Ido Daganat Bar Ilan University, Israel. His current research activity is inacquisition of knowledge for textual entailment.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>04 Aug 2006</td>
<td align=left valign=top>Shou-de Lin</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs04_Aug_2006');">
Ph.D. defense practice talk
</a><br>
<span id=abs04_Aug_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This is a practice talk for my Ph.D. defense, whichwill be held on Aug 24th 3-5pm, SAL 322.<p>An important problem in the area of homeland security and frauddetection is to identify abnormal entities in large datasets.Although there are methods from knowledge discovery and data miningfocusing on finding anomalies in numerical datasets, there has beenlittle work aimed at discovering abnormal or suspicious instances inlarge and complex semantic graphs whose nodes are richly connectedwith many different types of links. In this talk, I will describe anovel, domain-independent and unsupervised framework to identify suchinstances.  Besides discovering suspicious instances, we believe thatto complete the discovery process and to deal with the "curse offalse positives", a system has to convince the users by providingexplanations for its findings. Therefore, in the second part of thetalk I will describe an explanation mechanism to automaticallygenerate human-understandable explanations for the discoveredresults. Experimental results show that our discovery systemoutperforms state-of-the-art unsupervised network algorithms used toanalyze the 9/11 terrorist network by a large margin. Additionally, ahuman study we conducted demonstrates that our explanation system,which provides natural language explanations for its findings,allowed human subjects to perform complex data analysis in a muchmore efficient and accurate manner<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>28 Jul 2006</td>
<td align=left valign=top>Qin Iris Wang (Alberta)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs28_Jul_2006');">
Improved Large Margin Dependency Parsing via Local Constraints and Laplacian Regularization
</a><br>
<span id=abs28_Jul_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk is about an improved approach for learning dependency parsersfrom treebank data. Our technique is based on two ideas for improvinglarge margin training in the context of dependency parsing.  First, weincorporate local constraints that enforce the correctness of eachindividual link, rather than just scoring the global parse tree. Second,to cope with sparse data, we smooth the lexical parameters according totheir underlying word similarities using Laplacian Regularization.  Todemonstrate the benefits of our approach, we consider the problem ofparsing Chinese treebank data using only lexical features, that is,without part-of-speech tags or grammatical categories.  We achieve stateof the art performance, improving upon current large margin approaches.<p>Here is the link for the paper:http://www.cs.ualberta.ca/~wqin/papers/depar_margin_conll06.pdf<p>About the speaker:<p>Qin Iris Wang is a Ph.D. student from the University of Alberta,working with Dekang Lin and Dale Schuurmans. Her research interestsare in natural language processing and machine learning. Specifically,she has been working on dependency parsing using both generative anddiscriminative methods.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Jul 2006</td>
<td align=left valign=top>Dragos Munteanu + Joseph Turian</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Jul_2006');">
Practice Talks for ACL
</a><br>
<span id=abs11_Jul_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 2:30 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Extracting Parallel Sub-Sentential Fragments from Non-Parallel CorporaDragos Munteanu<p>We present a novel method for extracting parallel sub-sentential fragmentsfrom comparable bilingual corpora. Currently, the state of the art incomparable corpus mining is only able to extract full sentence pairs whichare judged to be parallel. We advance the state of the art by showing howto obtain useful data even from not-fully-parallel sentences. By analyzingsentence pairs using a signal-processing-inspired approach, we detectwhich segments of the source sentence are translated into segments of thetarget sentence, and which are not. We evaluate the quality of theextracted data by showing that it improves the performance of astate-of-othe-art machine translation system.<p><p>Advances in Discriminative ParsingJoseph Turian<p>The present work advances the accuracy and training speed ofdiscriminative parsing. Our discriminative parsing method has nogenerative component, yet surpasses a generative baseline on constituentparsing, and does so with minimal linguistic cleverness. Our model canincorporate arbitrary features of the input and parse state, and performsfeature selection incrementally over an exponential feature space duringtraining. We demonstrate the flexibility of our approach by testing itwith several parsing strategies and various feature sets.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Jun 2006</td>
<td align=left valign=top>David Chiang and Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Jun_2006');">
Synchronous Grammars and Tree Transducers
</a><br>
<span id=abs30_Jun_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> (Practice tutorial for ACL/COLING 2006)<p>Once upon a time, synchronous grammars and tree transducers were esoterictopics in formal language theory, far removed from the practice ofbuilding real, large-scale natural language systems. However, these toolsare now rapidly becoming essential for modeling machine translation andother complex language transformations. It has therefore become practicaland important to understand the basic properties of tree transformationsystems, which we cover in this tutorial.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Jun 2006</td>
<td align=left valign=top>Joseph Turian (NYU)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Jun_2006');">
Discriminative Training for Large-Scale NLP
</a><br>
<span id=abs23_Jun_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Parsing and translating natural languages can be viewed asstructured-prediction problems. We outline the crucial designdecisions that must be made to build a machine to solve structuredprediction problems, and explain our particular choices for these twolarge-scale NLP problems.  Our approach uses a purely discriminativelearning method that scales up well to problems of this size.  Unlikecurrently popular methods, this one does not require a great deal offeature engineering a priori, because it performs feature selectionover a compound feature space as it learns.  Accuracy on constituentparsing was at least as good as other comparable methods.  To ourknowledge, it is the first purely discriminative learning algorithmfor translation with tree-structured models.  Experiments demonstratethe method's versatility, accuracy, and efficiency.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 May 2006</td>
<td align=left valign=top>Radu Soricut and Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_May_2006');">
Defense Practice Talks: Generation and Learning
</a><br>
<span id=abs26_May_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> These are two practice talks for our upcoming thesis defenses.  The titlesand abstracts are:<p>--------------------------------------------------------------------------<p>NATURAL LANGUAGE GENERATION FOR TEXT-TO-TEXT APPLICATIONS USING AN INFORMATION-SLIM REPRESENTATION<p>Radu Soricut<p>In this talk, I describe a new natural language generation paradigm, basedon direct transformation of textual information into well-formed textualoutput.  I support this language generation paradigm with theoreticalcontributions in the field of formal languages, new algorithms, empiricalresults, and software implementations. At the core of this work is a novelrepresentation formalism for probability distributions over finitelanguages. Due to its convenient representation and computationalproperties, this formalism supports a wide range of language generationneeds, from sentence realization to text planning.<p>Based on this formalism, I describe, implement, and analyze theoreticallya family of algorithms that perform language generation using directtransformations of text. These algorithms use stochastic models oflanguage to drive the generation process. I perform extensive empiricalevaluations using my implementation of these algorithms. These evaluationsshow state-of-the-art performance in automatic translation, andsignificant improvements in state-of-the-art performance in abstractiveheadline generation and coherent discourse generation.<p><p>--------------------------------------------------------------------------<p>PRACTICAL STRUCTURED LEARNING FOR NATURAL LANGUAGE PROCESSING<p>Hal Daume III<p>Natural language processing is replete with problems whose outputs arehighly complex and structured.  The current state-of-the-art in machinelearning is not yet sufficiently general to be applied to general problemsin NLP.  In this thesis, I present Searn (for "search" + "learn"), anapproach to learning for structured outputs that is applicable to the widevariety of problems encountered in natural language.  Searn operates bytransforming structured prediction problems into a collection ofclassification problems, to which any standard binary classifier may beapplied.  From a theoretical perspective, Searn satisfies a strongfundamental performance guarantee: given a good classification algorithm,Searn yields a good structured prediction algorithm.  To demonstrateSearn's general applicability, I present applications in such diverseareas as automatic document summarization and entity detection andtracking.  In these applications, Searn is empirically shown to achievestate-of-the-art performance.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 May 2006</td>
<td align=left valign=top>Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_May_2006');">
Beyond EM: Bayesian Techniques for Human Language Technology Researchers
</a><br>
<span id=abs24_May_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 9:00 am - 12:00 pm<br>
<b>Location:</b> 4th Floor<br>
<b>Abstract:</b> This is a practice tutorial for one I am giving at HLT/NAACL one weeklater.  Comments/feedback are very welcome.<p>----------------------------------------------------------------------<p>Expectation Maximization (EM) has proved to be a great and usefultechnique for unsupervised learning problems in speech and languageprocessing.  Unfortunately, its range of applications is limited either byintractable E- or M-steps, or by its reliance on the maximum likelihoodestimator.  The natural language processing community typically resorts toad-hoc approximation methods to get (some reduced form of) EM to apply toNLP tasks.  However, many of the problems that plague EM can be solvedwith Bayesian methods, which are theoretically more well justified.  Inthis tutorial, I discuss Bayesian methods as they can be used in naturallanguage processing.  The two primary foci of this tutorial are specifyingprior distributions and performing the necessary computations to performinference in Bayesian models.  I focus on unsupervised techniques (forwhich EM is the obvious choice), but discuss supervised and discriminativetechniques at the conclusion with pointers to relevant literature.<p>Depending on one's inference technique of choice, the math required tobuild Bayesian learning models can be difficult.  Compounding this problemis the fact that current written tutorials on Bayesian techniques tend tofocus on continuous-valued problems, a poor match for the high-dimensiondiscrete world of text.  This combination makes the cost of entrance tothe Bayesian learning literature often too high.  The goal of thistutorial is to provide sufficient motivation, intuition and vocabularymapping so that one can easily understand recent papers in Bayesianlearning that are published at conferences like NIPS, and increasingly atACL.  In addition to the standard tutorial materials (slides), thistutorial is accompanied by a technical report that spells out all themathematic derivations in great detail, for those who wish to startresearch projects in this fields.<p>This tutorial should be accessible to anyone with a basic understanding ofstatistics.  I use a query-focused summarization task as a motivatingrunning example for the tutorial, which should be of interest toresearchers in natural language processing and in information retrieval.Additionally, though the tutorial does not focus on speech problems, thoseattendees interested in graphical modeling techniques for automatic speechrecognition might also find the tutorial of interest.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 May 2006</td>
<td align=left valign=top>Patrick Pantel</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_May_2006');">
Espresso: Making Use of Generic Patterns for Mining Relations from Small and Large Corpora
</a><br>
<span id=abs19_May_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In the past decade, researchers have explored many approaches toautomatically extract large collections of knowledge from text. In thistalk, we present Espresso, a weakly-supervised, general-purpose, andbroad-coverage algorithm for harvesting binary semantic relations. Themain contributions are: i) a method for exploiting generic patterns byfiltering incorrect instances using the Web; and ii) a principled measureof pattern and instance reliability enabling the filtering algorithm. Wepresent an empirical comparison of Espresso with various state of the artsystems, on different size and genre corpora, on extracting variousgeneral and specific relations. Experimental results show that ourexploitation of generic patterns substantially increases system recallwith small effect on overall precision.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>12 May 2006</td>
<td align=left valign=top>Nick Mote and Donghui Feng</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs12_May_2006');">
Pedagogical Contextualization of Language Learner Speech Errors AND Learning to Detect Conversation Focus of Threaded Discussions
</a><br>
<span id=abs12_May_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This is two practice talks.<p>-----------------------------------------------------------------------------FIRST TALK:<p>The traditional approach to diagnosing learner speech errors in ComputerAided Language Learning is to create a linguistic profile of thelearner/user. We, however, propose that work must also be done to modelthe linguistic profile of a typcial native listener.<p>Not all errors in second langage learner speech are created equal.Different errors sound more "severe" or "harsh" to native speaker ears andshould therefore be treated with more emphasis in pedagogical interaction.<p>The Tactical Language Training System (TLTS) is a speech-enabledvirtual-reality based computer learning environment designed to teachArabic spoken communication to American English speakers. This talkaddresses the ways the TLTS contextualizes non-native speech errors, andhow this contextualization fits in the corrective exchanges between anon-native learner and a pedagogical agent built to model a nativelistener.<p>The pedagogical system used in TLTS includes:<p>  * Automatic Speech Recognition (ASR) models which are built on acombination of both annnotated and unannotated non-native speech withnative speech data.<p>  * A stochastic generative model for errors in learner speech thatcreates mispronunciation grammars for the ASR<p>  * Reweighting of system-perceived mispronunciation severity based onaggregate native speaker judgements of quality pronunciation andintelligiblity.<p>  * Contextualization of feedback based on lexical and phoneticinventories of the native and non-native languages.<p><p>-----------------------------------------------------------------------------SECOND TALK:<p>We present a novel feature-enriched approach that learns to detect theconversation focus of threaded discussions by combining NLP analysis andIR techniques. Using the graph-based algorithm HITS, we integratedifferent features such as lexical similarity, poster trustworthiness, andspeech act analysis of human conversations with featureoriented linkgeneration functions. It is the first quantitative study to analyze humanconversation focus in the context of online discussions that takes intoaccount heterogeneous sources of evidence. Experimental results using athreaded discussion corpus from an undergraduate class show that itachieves significant performance improvements compared with the baselinesystem.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 May 2006</td>
<td align=left valign=top>Namhee Kwon</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_May_2006');">
Recognizing Argument Structures in Texts
</a><br>
<span id=abs05_May_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I present our approach to identify an argument structure defined as asimple hierarchical structure of claim and reasons.  The claim is alsoclassified into "in favor of" or "against" the topic. The experiment isperformed on the comments from the general public sent to governmentofficials in response to proposed regulations.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>28 Apr 2006</td>
<td align=left valign=top>Feng Pan</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs28_Apr_2006');">
Learning Event Durations from Event Descriptions
</a><br>
<span id=abs28_Apr_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The research of extracting event duration information from texts ispotentially very important in applications in which the time course ofevents is to be extracted from news.  For example, whether two eventsoverlap or are in sequence often depends very much on their durations.  Ifa war started yesterday, we can be pretty sure it is still going on today.If a hurricane started last year, we can be sure it is over by now.<p>In the talk, I will first present our work on constructing an annotatedcorpus for extracting information about the typical durations of eventsfrom texts, including the annotation guidelines, the event classes wecategorized, the way we use normal distributions to model such vague andimplicit temporal information, and how we evaluate inter-annotatoragreement. I will then show that machine learning techniques applied tothis data yield coarse-grained event duration information, considerablyoutperforming a baseline and approaching human performance.<p>At the beginning of the talk, I will also give a brief overview of thetime ontology (OWL-Time, formerly DAML-Time) we have developed, which isrepresented in both first-order logic and the OWL web ontology language.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>21 Apr 2006</td>
<td align=left valign=top>Soo-Min Kim</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs21_Apr_2006');">
Identifying and Analyzing Judgment Opinions
</a><br>
<span id=abs21_Apr_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In this talk, we introduce a methodology for analyzing judgment opinions.We define a judgment opinion as consisting of a valence, a holder, and atopic. We decompose the task of opinion analysis into four parts: 1)recognizing the opinion; 2) identifying the valence; 3)  identifying theholder; and 4) identifying the topic. We evaluate our methodology usingboth intrinsic and extrinsic measures.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Apr 2006</td>
<td align=left valign=top>Radu Soricut</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Apr_2006');">
Natural Language Generation for Text-to-Text Applications using an Information-Slim Representation
</a><br>
<span id=abs14_Apr_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Although a considerable number of generic Natural Language Generation(NLG) systems has been produced over the years, none of them is usuallyemployed in end-to-end, text-to-text applications such as MachineTranslation, Summarization, Question Answering, etc. In this talk, weidentify the likely reasons for this state of affairs, and proposeWIDL-expressions as a flexible formalism that facilitates the integrationof a generic NLG engine within end-to-end language processingapplications.<p>WIDL-expressions represent compactly probability distributions over finitesets of candidate realizations, and have optimal algorithms for textrealization via interpolation with language model probabilitydistributions. We show the effectiveness of our WIDL-based NLG engine forboth sentence realization and document realization tasks. By employinglanguage models that capture sentence-level properties, we perform MachineTranslation and Headline Generation at state-of-the-art levels or better.By employing language models that capture document-level properties suchas text coherence, we synthesize output for Multi-document Summarizationthat displays both high content selection performance and increasedcoherence.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Mar 2006</td>
<td align=left valign=top>Dragos Munteanu</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Mar_2006');">
Automatic creation of parallel corpora
</a><br>
<span id=abs24_Mar_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Parallel texts -- texts that are translations of each other -- are animportant resource in many cross-lingual NLP applications, such as lexicalacquisition, cross-language IR, and annotation projection. However, theirimportance is paramount for Statistical Machine Translation (SMT), as theyprovide the training data from which all the translation knowledge islearned. The state of the art in SMT is advanced enough that, givensufficient parallel data (i.e. a few million words) for any language pairin a given domain, a generic SMT system trained on it will achieve areasonable translation performance in that domain. The main reason why SMTsystems exist only for a handful of languages is that, for most languagepairs, parallel training data is simply not available.<p>One way to alleviate this lack of parallel data is to exploit a muchricher and more diverse resource: comparable corpora, texts which are notstrictly parallel but related. The prototypical example of comparabletexts are two news articles in different languages which report on thesame event. I will present methods for automatic extraction of paralleldata from such corpora. I will show how to detect parallel data at variouslevels of granularity: parallel documents, parallel sentences, and evenparallel sub-sentence fragments. The parallel corpora obtained using thesemethods help improve translation performance for both resource-scarcelanguage pairs (such as Romanian-English) and resource-rich ones (such asArabic-English).<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Mar 2006</td>
<td align=left valign=top>Jon May</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Mar_2006');">
Tiburon: A Finite State Tree Automata Toolkit
</a><br>
<span id=abs17_Mar_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 4th Floor<br>
<b>Abstract:</b> In the 1990s, researchers applied their new developments in transducertheory using widely available easy-to-use toolkits for string transducers,and made well-known advances in parsing, machine translation, and otherareas. Rapid prototyping via software such as the AT&T toolkit and carmelwas useful for proofs of concept and in many cases led to unforseendevelopments in novel areas. In the current nlp research environment treebased strategies and new models have shown promising results in advancingthe state of the art, and recent developments in weighted tree automatatheory are enriching the bedrock created 40 years ago, but as of yet thereis no toolkit available with the necessary capabilities to turn promiseinto solution.<p>Tiburon is the first probablistic tree transducer toolkit. Similar in formand function to the string-based toolkits of yesteryear, it is designed tobe easy to use, with simple but expressive definitions of tree automataand a concise set of vital operations that can be used to construct manyuseful tree-based nlp projects. Although a work in progress, Tiburon isalready a usable tool with active users between the ages of 6 and 41. Iwill describe the current status of the system, demonstrate ease of useand potential power, and discuss the challenges ahead.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Mar 2006</td>
<td align=left valign=top>Mark Hopkins</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Mar_2006');">
Exploring the Potential of Intractable Parsers
</a><br>
<span id=abs10_Mar_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 10th Floor<br>
<b>Abstract:</b> We revisit the idea of history-based parsing, and present a history-basedparsing framework that strives to be simple, general, and flexible.  Wealso provide a decoder for this probability model that is linear-space,optimal, and anytime.  A parser based on this framework, when evaluated onSection 23 of the Penn Treebank, compares favorably with otherstate-of-the-art approaches, in terms of both accuracy and speed.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>03 Mar 2006</td>
<td align=left valign=top>Liang Huang (Penn)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs03_Mar_2006');">
Syntax-Directed Translation with Extended Domain of Locality
</a><br>
<span id=abs03_Mar_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11th Floor (Large)<br>
<b>Abstract:</b> (note: this is a very tentative title -- comments welcome!)<p>We present a novel extension of syntax-directed translation forstatistical MT. Formally speaking, our model is based on tree-to- stringtransducers that recursively convert a parse-tree in the source-languageinto a string in the target-language. These transduction rules havemulti-level trees on the source-side, giving this system moretransformational power due to the extended domain of locality. We alsopresent efficient algorithms for decoding based on dynamic programming.Initial experiments on English-to-Chinese translation show promisingresults in both speed and the translation quality.<p>Joint work with Kevin Knight and Aravind Joshi.<p>Bio:<p>Liang Huang is a 3rd-year PhD student from the University of Pennsylvania.He is mainly interested in algorithms and formalisms for parsing andsyntax-based machine translation. His recent work has been on k-bestparsing algorithms (with David Chiang) and synchronous binarization for MT(with Hao Zhang, Dan Gildea, and Kevin Knight).<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Feb 2006</td>
<td align=left valign=top>Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Feb_2006');">
Search-based Structured Prediction
</a><br>
<span id=abs24_Feb_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I present an algorithm, Searn (for "search-learn") that is designed tosolve structured prediction problem: problems whose goal is to learn topredict complex objects such as parts-of-speech, parse trees,translations, etc...  Searn functions by "breaking apart" structuredprediction problems into classification problems in the process of search.I analyze Searn in the framework of learning reductions and show that goodperformance on the underlying classification problems implies good searchperformance.  Moreover, Searn is computationally efficient in a supersetof the settings where previous algorithms are efficient and is not limitedby conditional independence assumptions (as in CRFs).  This excessivelysimple and general algorithm turns out to have excellent state-of-the-artperformance.<p>This is joint work with John Langford (TTI-C) and Daniel Marcu; and, to alesser extent, with Drew Bagnell (CMU) and Bianca Zadrozny (IBM TJWatson).<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Feb 2006</td>
<td align=left valign=top>David Chiang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Feb_2006');">
Parsing Arabic Dialects
</a><br>
<span id=abs10_Feb_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The Arabic language exhibits diglossia, i.e., the coexistence of two formsof language, a variety with standard orthography and sociopolitical cloutwhich is not natively spoken by anyone (Modern Standard Arabic, MSA) andvarieties that are primarily spoken and lack writing standards (Arabicdialects). There are important resources currently available for MSA withmuch on-going NLP work; for example, there is an Arabic Treebank andseveral syntactic parsers for MSA.  However, Arabic dialect resources andNLP research are still at an infancy stage. I will present work done atthe Johns Hopkins CLSP Summer Workshop on parsing of Arabic dialects, inparticular, Levantine Arabic.  We have experimented with three approachesto leveraging MSA resources to create a parser for Levantine Arabic, aswell as methods for induction of MSA-Levantine translation lexicons and aLevantine part-of-speech tagger. Using these methods we obtain errorreductions of up to 15% compared with applying an MSA parser directly toLevantine text.<p>Rambow et al. Parsing Arabic Dialects: Final Report. Johns HopkinsUniversity Center for Language and Speech Processing Workshop 2005.http://www.clsp.jhu.edu/ws2005/groups/arabic/documents/finalreport.pdf<p>Chiang et al. Parsing Arabic Dialects. To appear in Proc. EACL 2006.<p>This is joint work with O. Rambow, M. Diab, N. Habash, R. Hwa, K. Sima'an,V.  Lacey, R. Levy, C. Nichols and S. Shareef.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>03 Feb 2006</td>
<td align=left valign=top>Alex Fraser</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs03_Feb_2006');">
Measuring Word Alignment Quality for Statistical Machine Translation
</a><br>
<span id=abs03_Feb_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Automatic word alignment plays a critical role in statistical machinetranslation. Unfortunately the relationship between alignment quality andstatistical machine translation performance has not been well understood.In the recent literature the alignment task has frequently been decoupledfrom the translation task, and assumptions have been made about measuringalignment quality for machine translation which, it turns out, are notjustified. In particular, none of the tens of papers published over thelast five years has shown that significant decreases in Alignment ErrorRate (AER) result in significant increases in translation quality. I willexplain this state of affairs and present steps towards measuringalignment quality in a way which is predictive of statistical machinetranslation quality.<p>I will also provide a brief overview of some of my other work on trainingand search for word alignment.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Jan 2006</td>
<td align=left valign=top>John Conroy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Jan_2006');">
Multi-Document Summary Space:What do People Agree is Important?
</a><br>
<span id=abs27_Jan_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> A multi-document summary gives the "gist" of what is contained in acollection of related documents. But how can we define a "gist?" Weexplore this question by analyzing human written summaries for clusters ofdocument sets. In particular, we estimate the probability that word willbe chosen by a human to be included in a summary. We demonstrate that ifthis probability model were given by an oracle, then a simple automaticmethod of summarization can produce extract summaries which arestatistically indistinguishable from the human summaries.<p>About the Speaker:<p>John M. Conroy received a B.S. in Mathematics from Saint Joseph'sUniversity in 1980 and a Ph.D. in Applied Mathematics from the Universityof Maryland in 1986. Since then he has been a research staff member forthe IDA Center for Computing Sciences in Bowie, MD. His research interestis applications of numerical linear algebra and statistics. He is a memberof the Society for Industrial and Applied Mathematics, Institute ofElectrical and Electronics Engineers (IEEE), and the Association forComputational Linguistics.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Jan 2006</td>
<td align=left valign=top>Tim Chklovski</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Jan_2006');">
GrainPile: Deriving Quantitative Overviews of Free Text Assessments on the Web
</a><br>
<span id=abs26_Jan_2006 style="display:none;">
<font size=-1>
<b>Time:</b> 1:00 pm - 2:00 pm<br>
<b>Location:</b> 4th floor<br>
<b>Abstract:</b> Many research efforts are addressing the problem of enabling automaticsummarization of opinions and assessments stated on the web in productreviews, discussion forums, and blogs. One key difficulty is that relevantassessments scattered throughout web pages are obscured by variations innatural language. In this paper, we focus on a novel aspect of enablingaggregations of assessments of degree to which a given property holds fora given entity (for instance, how touristy is Boston). We presentGrainPile, a user interface for extracting from the web, aggregating andquantifying degree assessments of unconstrained topics. The interfaceprovides a variety of functions: a) identification of dimensions ofcomparison (properties) relevant to a particular entity or set ofentities, b) comparisons of like entities on user-specified properties(for example, which university is more prestigious, Yale or Cornell), c)tracing the derived opinions back to their sources (so that the reasonsfor the opinions can be found). A central contribution in GrainPile is theevaluated demonstration of feasibility of mapping the recognizedexpressions (such as fairly, very, extremely, and so on) to a common scaleof numerical values and aggregating across all the extracted assessmentsto derive an overall assessment of degree. GrainPile&#8217;s novelassessment and aggregation of degree expressions is shown to stronglyoutperform an interpretation-free, co-occurrence based method.<p>Full paper:<p>http://www.isi.edu/~timc/papers/IUI06-grainpile-chkl.pdf<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Dec 2005</td>
<td align=left valign=top>Jonathan May</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Dec_2005');">
A Better N-Best List - Practical Determinization of Weighted Finite Tree Automata
</a><br>
<span id=abs16_Dec_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Ranked lists of output trees from syntactic statistical NLP applicationsfrequently contain multiple repeated entries. This redundancy leads tomisrepresentation of tree weight and reduced information for debugging andtuning purposes. It is chiefly due to nondeterminism in the weightedautomata that produce the results. I will introduce an algorithm thatdeterminizes such automata while preserving proper weights, returning thesum of the weight of all multiply derived trees. I will also reportresults of the application of the algorithm to machine translation andData Oriented Parsing.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Sep 2005</td>
<td align=left valign=top>David Chiang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Sep_2005');">
Some Computational Complexity Results for Synchronous Context-Free Grammars
</a><br>
<span id=abs30_Sep_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 4 Large<br>
<b>Abstract:</b> (This is a practice talk for a paper by Giorgio Satta and Enoch Peserico)<p>This paper investigates some computational problems associated withprobabilistic translation models that have recently been adopted in theliterature on machine translation. These models can be viewed as pairs ofprobabilistic context-free grammars working in a `synchronous' way. Twohardness results for the class NP are reported, along with an exponentialtime lower-bound for certain classes of algorithms that are currently usedin the literature.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>29 Sep 2005</td>
<td align=left valign=top>Tim Chklovski</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs29_Sep_2005');">
Previews of my talks for K-CAP
</a><br>
<span id=abs29_Sep_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <p>The topics & approximate start times:<p>(3:00 sharp) My 7-10 min bit for panel discussion on "Manual vs. AutomatedKnowledge Acquisition"<p>Will touch on web extraction vs. learning from volunteers -- strengths andweaknesses, new thoughts on synergies<p>(3:15) Designing Intelligent Acquisition Interfaces for Collecting WorldKnowledge from Web Contributors(paper by Timothy Chklovski, Yolanda Gil)<p>(3:55) Collecting Paraphrase Corpora from Volunteer Contributors (paper byTimothy Chklovski)<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Aug 2005</td>
<td align=left valign=top>Fossum, Huang and Zhang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Aug_2005');">
Summer Student Presentations
</a><br>
<span id=abs26_Aug_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> 3:00pm  Victoria Fossum (Michigan)Exploring the Continuum between Phrase-based and Syntax-based Machine Translation<p>State-of-the-art statistical machine translation systems use lexicalphrases as the basic unit of translation.  Phrase-based systems cancapture those aspects of translation that are sensitive to local context.Syntax-based systems, on the other hand, make use of linguisticallymotivated syntactic structure, can capture long-distance dependencies andreorderings, and offer greater generalization in translation rules.However, their performance lags that of phrase-based systems.<p>Hierarchical phrase-based translation, introduced by [Chiang 05], providesan elegant framework for exploring the continuum between phrase-based andsyntax-based translation.  This system combines the "formal machinery" ofsyntax-based systems without any "linguistic commitment" to a particularsyntactic structure [Chiang 05].<p>I will present results from my re-implementation of Chiang's hierarchicalphrase-based system, and (if time permits) compare those results with thefollowing systems on Chinese-English translation: ISI's phrase-basedsystem, and ISI's syntax-based system.  Between now and December 2005, Iplan to incrementally explore the space between phrase-based andsyntax-based systems by augmenting these hierarchical phrase-based ruleswith richer syntactic annotation.<p><p>3:30pm  Liang Huang (Penn) and Hao Zhang (Rochester)Efficient Integration of n-gram Language Models with Syntax-based Decoding<p>We first give an overview of the ISI syntax-based MT system which is basedon tree-to-string (xRs) translation rules. The biggest problem at thisstage is the inefficiency of the integration of n-gram models.  Withoutn-gram models, the xRs translation rules can be easily binarized withrespect to the foreign language to ensure cubic-time decoding. With n-grammodels, however, binarization without considering both languages will leadto exponential complexity.<p>Inspired by Inversion Transduction Grammar (ITG) (Wu, 97), we will focuson the so-called ITG binarizable rules which count for over 99% of thewhole rule set. A simple linear-time algorithm will be presented to do thebinarization. Decoding with ITG-like rules is of low polynomial complexityin both time and space. We will discuss experimental results on bothefficiency and accuracy of decoding with the new binarization.  If timepermits, we will also present the "hook trick" (inspired by (Eisner andSatta, 99)) to even further reduce the polynomial complexity of thedecoding process.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Aug 2005</td>
<td align=left valign=top>Hopkins, Riesa, and Nakov</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Aug_2005');">
Summer Student Presentations
</a><br>
<span id=abs24_Aug_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:30 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> 3:30pm  Mark Hopkins (UCLA)Tree Sequence Automata: A Unifying Framework for Tree Relation Formalisms<p>There exist a wide variety of competing formalisms for representing alanguage of ordered tree pairs.  These include (bottom-up and top-down)tree transducers, synchronous tree-substitution grammars (STSGs),synchronous tree-adjoining grammars (STAGs), and inversion transductiongrammars (ITGs).  Since these formalisms have all developed independentlyof one another, it is difficult to compare their respectiverepresentational power.  This work seeks to make this task simpler byviewing these formalisms as instances of a general unifying formalism,which we call tree sequence automata (TSA).  By casting these differentformalisms in a single framework, we can compare them directly by studyingthe specific subclass of TSA that they fall into.<p>4:00pm  Jason Riesa (Johns Hopkins)A case study in building a cost-effective speech-to-speech machine translation system with sparse resources: English - Iraqi Arabic<p>The Arabic spoken dialect of Iraq is a language deprived of the vastresources that researchers enjoy when working with its writtencounterpart, Modern Standard Arabic (MSA). The Iraqi Arabic lexicon andgrammar are also sufficiently distinct so that the use of existing toolsor corpora for MSA yield little or no positive effect on machinetranslation output quality.  One can see that building a machinetranslation system normally dependent on a large parallel corpus is aparticularly difficult task when given just a 37,000 line translatedparallel text based on transcribed speech. This talk will explore theconstraints involved in working with this type of data, how we endeavoredto mitigate such problems as a non-standard orthography and a highlyinflected grammar, and propose a cost- effective way for dealing with suchprojects in the future.<p>4:30pm  Preslav Nakov (UC Berkeley)Multilingual Word Alignment<p>Recently there has been a growing number of available multilingualparallel texts. One such source is the European Union, which publishes itsofficial documents in the official languages of all member states(sometimes also in the languages of the candidates). Another source arethe United Nations. These corpora are a great source of training data formachine translation between new language pairs. But they also offer theopportunity to obtain better pairwise word alignments by looking atmultiple languages in parallel. In this talk I will present my research asa summer intern at ISI on getting better French (Fr) to English (En) wordalignments using an additional language (Xx). First, I will introduce twoheuristics which start with pairwise alignments between Fr-Xx, En-Xx andFr-En and then combine them probabilistically (in a linear model) orgraph-theoretically (by looking at in- and out-degrees for each word).Then I will present two Model1 inspired alignment models: (a) from "Fr andXx" to En; and (b) from Fr to "En and Xx".<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Aug 2005</td>
<td align=left valign=top>Jan Hajic (Charles U)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Aug_2005b');">
The Family of Prague Dependency Treebanks
</a><br>
<span id=abs05_Aug_2005b style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 12:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The Prague Dependency Treebank project is aimed at a linguisticallycomplex, multi-tier annotation of relatively large amounts of naturallyoccuring sentences of natural language. There are four tiers at present:the basic token tier (level 0), and the morphological, surface-syntacic,and semantic (called "tectogrammatics") tiers. The syntactic andtectogrammatic tiers are based on a richly labelled dependencyrepresentation principle. So far, the project produced three corpora: theCzech-language-only Prague Dependency Treebank, the Prague Czech-EnglishDependency Treebank and the Prague Arabic Dependency Treebank. In thetalk, the principles of the Prague Dependency Treebank linguisticannotation scheme will be presented. Some technical details will also bediscussed, as well as some of the tools developed both for the manualannotation itself and for corpus-based NLP of Czech, English and Arabic.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Aug 2005</td>
<td align=left valign=top>Doug Oard (Maryland)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Aug_2005');">
The CLEF Cross-Language Speech Retrieval Test Collection
</a><br>
<span id=abs05_Aug_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Test collections for information retrieval tasks have traditionallyassumed that what we are searching for are documents (e.g., Web pages,news stories, or academic documents).  Most information that is generatedis, however, not in originally generated as part of a document, but ratheras what we might refer to as "conversational media" (e.g., email, speech,or instant messaging).  In this talk, I'll describe the creation of twotest collections for conversational media, an email collection beingcreated in the TREC Enterprise Search track and a spoken word testcollection for the the Cross-Language Evaluation Forum (CLEF).  I'll spendmost of the talk describing the details of the CLEF test collection,illustrating the issues with some of the results that we have obtainedfrom our experiments with that collection.  I'll conclude with a fewremarks about the implications of what we are learning for DARPA's newGALE program.  This is joint work with Charles University, the IBM TJWatson Research Center, the Johns Hopkins University, the Survivors of theShoah Visual History Foundation, and the University of West Bohemia.<p><p>About the speaker:<p>Douglas Oard is an Associate Professor at the University of Maryland,College Park, with a joint appointment in the College of InformationStudies and the Institute for Advanced Computer Studies.  He holds a Ph.D.in Electrical Engineering from the University of Maryland, and hisresearch interests center around the use of emerging technologies tosupport information seeking by end users.  In 2002 and 2003, Doug spent ayear in paradise here at USC-ISI.  His recent work has focused oninteractive techniques for cross-language information retrieval and onsearching conversational text and speech.  Additional information isavailable at http://www.glue.umd.edu/~oard/.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Jul 2005</td>
<td align=left valign=top>Victoria Li Fossum (Michigan)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Jul_2005');">
Inducing POS Taggers by Projecting from Multiple Source Languages
</a><br>
<span id=abs15_Jul_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> (Yarowsky et al., 2001) present an algorithm for bootstrapping a POStagger for an arbitrary target language, using an existing POS tagger fora source language and a parallel corpus in the source and targetlanguages.  The source text is annotated with the POS tagger; the parallelcorpus is word-aligned; the POS tags are "projected" from source to targetlanguage; and finally smoothing is performed before training a POS taggerfor the target language on the projected annotations.<p>I will talk about my work (jointly with my advisor, Steve Abney, at U. ofMichigan) in which we extend this algorithm by projecting from multiplesource languages onto a target language, then combining the outputs tocompute a consensus POS tagger.  Our hypothesis is that systematictransfer errors from different source-target pairs can be reduced by usingmultiple source languages.  I will present experimental results for threedifferent source languages (English, German, and Spanish), and twodifferent target languages (French and Czech).  Our results indicate thatusing multiple source languages improves performance.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Jul 2005</td>
<td align=left valign=top>Radu Soricut</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Jul_2005');">
Natural Language Generation for Text-to-Text Applications Using an Information-Slim Representation
</a><br>
<span id=abs07_Jul_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Small<br>
<b>Abstract:</b> Text-to-text applications -- Machine Translation, Summarization, QuestionAnswering -- do not usually involve generic Natural Language Generation(NLG) systems in their generation components, but rather useapplication-specific algorithms. The main reason for this state of affairsis that virtually all the formalisms used by current generic NLG systemsrequire information that cannot be reliably extracted from unrestrictedtext.<p>This thesis proposal is about meeting the demand for natural languagegeneration in the context of text-to-text applications. I introduce a newrepresentation formalism (WIDL-expressions), propose generation algorithmsthat operate on representations specific to this formalism, and discuss ageneric sentence realization framework for text-to-text applications. Thegeneration mechanism is based on algorithms for intersectingWIDL-expressions with probabilistic language models. I present boththeoretical and empirical results concerning the correctness andefficiency of these algorithms. I also discuss the practical aspectsarising from implementing this generation mechanism.<p>In a concrete application of the proposed generation mechanisms, I presentan end-to-end Machine Translation application. I also discuss anotherpossible application for Automated Summarization, namely automatedheadline generation.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>06 Jul 2005</td>
<td align=left valign=top>Alessandro Moschitti (Rome)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs06_Jul_2005');">
Kernel Methods for Semantic Role Labeling
</a><br>
<span id=abs06_Jul_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 3:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Automatic Natural Language applications often require the processing ofstructured data. Traditional machine learning approaches attempt torepresent structured syntactic/semantic objects by means of flat featurerepresentations, i.e. attribute-value vectors. This raises two problems:<p>1. There is no well defined theoretical motivation for such feature model.Structural properties may not fit in any flat feature representation.<p>2. To define effective flat features, a deep knowledge about thelinguistic phenomenon is required.<p>Kernel methods for Natural Language Processing aim to solve both the aboveproblems as kernel functions can be used to define similarities betweenlinguistic objects without explicitly defining the target feature space.In this way, a linguistic phenomenon can be modeled at a more abstractlevel where the modeling is easier. Such property is extremely useful whenthe representation of linguistic phenomena is still not well understood.For example, the feature design of semantic role labeling appear to bequite complex since several and non-definitive feature sets have beenproposed.<p>As a viable alternative to manual feature design, kernel methods proposetwo steps: (1) they generate all substructures of the targetsyntactic/semantic structures and (2) they let the learning algorithm(e.g. Support Vector Machines) to select the most relevant substructures.In this talk, we (1) introduce the PropBank and FrameNet predicateargument structures, (2) present the standard approaches to the automaticlabeling of semantic roles and (3) show advanced semantic role labelingmodels based on kernel methods.<p>About the speaker:<p>Alessandro Moschitti is a researcher at the Computer Science Department ofthe University of Rome ^ÓTor Vergata^Ô. In 1998 he took his master degreein Computer Science at the University of Rome ^ÓLa Sapienza^Ô. In 2003 hefinished his PhD in Computer Science at ^ÓTor Vergata^Ô University.Between 2002 and 2004 he worked as an associate researcher in theUniversity of Texas at Dallas. His research interests concern machinelearning approaches for Natural Language Processing and InformationRetrieval. His deep expertise relates to automated text categorization andsemantic role labeling.  Recently, he has devised new kernels which enableSupport Vector and other kernel-based machines to carry out advancedsemantic processing.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Jun 2005</td>
<td align=left valign=top>Michael Fleischman (MIT)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Jun_2005');">
Intentional Context in Situated Language Learning
</a><br>
<span id=abs23_Jun_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 12:00 pm<br>
<b>Location:</b> 11 Small<br>
<b>Abstract:</b> Natural language interfaces designed for agents that interact with usersin shared environments (e.g. training simulators, videogames) mustincorporate knowledge about the users' context in order to address themany ambiguities of situated language use. We introduce a model ofsituated language acquisition that operates in two phases.  First,intentional context is represented and inferred from user actions usingprobabilistic context free grammars.  Then, utterances are mapped ontothis representation in a noisy channel framework.  The acquisition modelis trained on unconstrained speech collected from subjects playing aninteractive game, and tested using an understanding task.  Discussion ofresults focuses both on the implications for theoretical models ofcognition, as well as, for natural language applications in sharedenvironments.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Jun 2005</td>
<td align=left valign=top>Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Jun_2005');">
Beyond EM: Bayesian Techniques for NLP Researchers
</a><br>
<span id=abs22_Jun_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 1:00 pm - 4:30 pm (Wednesday and long!)<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> EM has proved to be a great and useful technique for unsupervised learningproblems in natural language.  Unfortunately, it cannot solve everyproblem out there, either because the E-step is intractable, the M-step isintractable or both.  Typically our community resorts to a Viterbiapproximation in this case, which really isn't very justified and caneasily diverge from our expectations (no pun intended). Moreover, EM --like all maximum likelihood methods -- suffers from a need for ad-hoc andundesirable smoothing.  All of these problems -- intractable E- orM-steps, the Viterbi approximation, and the annoyance of smoothing -- aresolved by using Bayesian methods. Moreover, from a theoretic point ofview, the Bayesian paradigm is much more foundationally well justifiedthan the frequentist use of estimators (such as the maximum likelihoodestimator), at some cost in computation (though not as much as you mightbelieve).<p>In this tutorial, I will discuss Bayesian methods as they can be used innatural language processing.  The first half will be background (some ofwhich you probably won't have seen, some of which you probably will haveseen, but which will probably be presented in a different way that you'reused to) including graphical models, EM, priors and pro- (and con-)Bayesian arguments.  The second half of the tutorial will focus on solvingcomplex inference problems, essentially building on what we've seen fromEM.  I'll cover MAP (*not* Bayesian -- if you can't tell me why, then youshould come to the tutorial!), summing, Monte Carlo, MCMC, Laplace,variational and expectation propagation.  Time permitting, I will brieflydiscuss Bayesian discriminative models (basically what a Bayesian usesinstead of SVMs), non-parametric (infinite) models and Bayesian decisiontheory, all of which make use of the inference techniques we will havealready covered.<p>This tutorial is intended to be largely self contained, though I willexpect that you know what probabilities are, what distributions are andthe standard manipulations of conditional/joint distributions. Familiaritywith EM would be helpful, but I'll cover this topic in some depth since itwill be important for understanding the rest of the tutorial.  I hope --though this never really seems to come to fruition -- that this will be asemi-interactive talk and I will attempt to adjust according to whatpeople are interested in and what is putting people to sleep.<p>(see http://www.isi.edu/~hdaume/bayesnlp/ for more information)<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Jun 2005</td>
<td align=left valign=top>Mitsunori Matsushita</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Jun_2005b');">
Lumisight Table: A Face-to-face Collaboration Support System That Optimizes Direction of Projected Information to Each Stakeholder
</a><br>
<span id=abs22_Jun_2005b style="display:none;">
<font size=-1>
<b>Time:</b> 11:00 am - 12:00 pm (Wednesday the 22nd!)<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> (This talk occurs in the morning on the same day as the Bayesian tutorial.)<p>The goal of our research is to support cooperative work performed bystakeholders sitting around a table. To support such cooperation, varioustable-based systems with a shared electronic display on the tabletop havebeen developed. These systems, however, suffer the common problem of notrecognizing shared information such as text and images equally because theorientation of their view angle is not favorable. To solve this problem,we propose the Lumisight Table. This is a system capable of displayingpersonalized information to each required direction on one horizontalscreen simultaneously by multiplexing them and of capturing stakeholders'gestures to manipulate the information.<p>About the Speaker:<p>Mitsunori Matsushita is a research scientist of NTT Communication ScienceLabs., Nippon Telegraph and Telephone Corporation (NTT). He received B.E.,M.E., and Dr.E. degrees from Osaka University, in 1993, 1995 and 2003respectively. In 1995, he joined NTT, and has been engaged in researcheson natural language understanding, information visualization, andinteraction design.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>20 Jun 2005</td>
<td align=left valign=top>Birte Loenneker (Hamburg)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs20_Jun_2005');">
Between Story Generation and Natural Language Generation
</a><br>
<span id=abs20_Jun_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 10:00 am - 11:30 am<br>
<b>Location:</b> 11 Small<br>
<b>Abstract:</b> Narratology analyzes the discursive structure of narratives as finalizedproducts of human invention, such as novels, short-stories, orfairy-tales. Those narratives are rendered in a given surface form;Narratology focuses on narratives in natural language. Narratologistsassume that each narrative surface representation is associated with aneutral, abstract event sequence, the "Story" (histoire, sjuzhet). Theabstractness of Story is illustrated by the fact that the same Story canbe realized in different surface texts. By discursive structure or"Discourse" (discours, fabula), narralogists mean the relation between anabstract Story and its concrete expression in a sequential text. Forexample, if the chronological order of the Story is not respected in itstextual recount, we are dealing with the Discourse parameter of order.Other Discourse parameters include the frequency with which Story eventsare evoked, the point of view from which they are narrated (perceived,evaluated,...), or framed narratives with several narrative levels.<p>The Story Generator Algorithms project at the University of Hamburgevaluated several existing Story Generators with respect to theirdiscursive abilities. It became obvious that most Story Generatorsconcentrate on creating a coherent and chronological abstract Story,which is directly mapped onto natural language. This results in apredominance of 1:1 relations between Story and surface, and in mostcases corresponds to a default or zero instantiation of Discourseparameters. As a consequence, Story Generator outputs tend to be veryexplicit and straightforward, and are likely to be perceived as uniformand boring.<p>Narratological expert knowledge might be useful to future enhanced StoryGenerators and to Natural Language Generation systems dealing withnarrative. One of the aims of Computational Narratology is to model thatexpert knowledge. Ideally, narratological knowledge will be integratedinto a Narratological Structurer, as a processing component of anadvanced system that creates narratives. In such a system, theNarratological Structurer will be the interface between a Story Generatorand subsequent Natural Language Generation modules. The talk alsopresents examples of the knowledge that is being modelled.<p><p>About the Speaker:<p>Birte Lönneker graduated from the University of Hamburg, Germany, with adegree in French with Finno-Ugristics (Finnish) and BusinessAdministration. Since then, her main fields of publication are CognitiveLinguistics and electronic resources for Natural Language Processing,with special focus on frames and metaphors, as well as electronicdictionaries, corpora, and recently part-of-speech tagging. Her PhD onConcept Frames and Relations, also published as a book in 2003, wasco-supervised at the Institute for Romance Languages and at theDepartment of Informatics in Hamburg. For her Slovenian-German onlinedictionary, Birte Lönneker was twice awarded the EURALEX Laurence UrdangAward. From 2002 to 2004, she received various research grants forSlovenia, where she was working in the Corpus Laboratory of the Instituteof Slovenian Language.<p>Since 2004, Birte Lönneker carries out research on Story GeneratorAlgorithms within the Narratology Research Group Hamburg. She is also aboard member of the German Cognitive Linguistics Association.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Jun 2005</td>
<td align=left valign=top>Gully Burns</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Jun_2005');">
The neuroscience laboratory as a knowledge factory: challenges, approaches and tools
</a><br>
<span id=abs17_Jun_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 12:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> As a discipline of biology, the field of neuroscience suffers greatly frominformation overload, non-standardization and complexity. In the absenceof a mathematical theoretical structure for the subject, scientists usetheir own ad-hoc methods of collating and synthesizing information fromboth the primary literature and their own data. In order to eventuallyformalize and accelerate the development of theoretical approaches in thesubject, we are combining an Electronic Laboratory Notebook (ELN) withasset management of the primary research literature to construct aknowledge engineering framework based around the organizational unit of aneuroscience laboratory. This project, called ¡NeuroScholar¢(http://www.neuroscholar.org/) is open-source, and is being tested andused in the laboratories of Prof. Larry Swanson and Prof. Alan Watts atUSC. In each laboratory, the system will operate on top of a ¡laboratorycorpus¢ of knowledge resources (data files, full-text pdf files , etc.)that summarizes the relevant knowledge for that laboratory. Not only willthis collection provide a valuable resource for the members of thelaboratory, it provides a platform for natural language processing andknowledge engineering to answer formally-defined research questions. TheSociety for Neuroscience¢s annual meeting attracts over 30,000 attendees,who collectively form potential user-base of this software.<p>I will talk about the ideas underlying the project, the currentimplementation of NeuroScholar, developments from collaboration with thenatural language group at ISI and possible collaborations for the future.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>13 Jun 2005</td>
<td align=left valign=top>Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs13_Jun_2005');">
Search, Learning and Features (my thesis proposal proposal)
</a><br>
<span id=abs13_Jun_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 12:00 pm (MONDAY!!!)<br>
<b>Location:</b> 11 Small<br>
<b>Abstract:</b> I'm going to talk about what I've been working on recently.  My thesisproposal is something having to do with the interaction of search,learning and features in supervised natural language problems.  I will befocusing on the task of coreference, since it is a well-studied problem,yet nevertheless not really solved and quite difficult.  It is also agreat pedagogical example for why we should care about something *other*than standard Markov random fields for structured prediction, since, forthe coreference problem (and pretty much every other "real" naturallanguage problem) inference in such models is intractable.<p>The contents of this talk will be roughly 40% from a paper I have at ICMLthis year on efficient, accurate supervised learning techniques forstructured prediction (and why I feel inclined to make the verycontroversial statement that supervised learning for NLP problems issolved); it will be roughly 40% about an application of this technique tothe coreference resolution problem and an exploration of the feature spacefor solving this problem (submitted to HLT); and it will be roughly 20%about looking forward to what I want to accomplish in the remainder of mythesis, not covered by the first 80%.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Jun 2005</td>
<td align=left valign=top>Liang Huang (Penn)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Jun_2005');">
Better k-best Parsing, Hypergraphs and Dynamic Programming
</a><br>
<span id=abs10_Jun_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We discuss the relevance of k-best parsing to recent applications innatural language parsing, and develop algorithms that substantiallyimprove on previously-used algorithms with respect to efficiency,scalability, and accuracy. We demonstrate these algorithms in experimentson Bikel's implementation of Collins' lexicalized PCFG model, and on asynchronous CFG based decoder for statistical machine translation. We showin particular how the improved output of our algorithms has the potentialto improve results from parse reranking systems and other applications.<p>In this talk, I will demonstrate the convergence of several popularparsing formalisms (weighted deduction, shared forest, semiring) under thepowerful hypergraph formalism. If time permits, I will also show howgeneric Dynamic Programming can be formalised as hypergraph searching.<p>Joint work with David Chiang (University of Maryland)<p><p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>08 Jun 2005</td>
<td align=left valign=top>Hao Zhang (Rochester)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs08_Jun_2005');">
Lexicalization and A* Searching for Inversion Transduction Grammar
</a><br>
<span id=abs08_Jun_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 4th floor<br>
<b>Abstract:</b> The Inversion Transduction Grammar (ITG) of \cite{DekaiCL} generates asynchronous parse tree for a given pair of sentences in two languages. Byallowing inversion of the order of children at any level of thesynchronous parse tree, ITG can do recursive, systematic word reordering.We made a version of ITG where the nonterminals are lexicalized by wordpairs and the inversions are dependent on the so-lexicalized nonterminals.We found out that after lexicalization, the Alignment Error Rate (AER)against gold standard is reduced for short sentences. ITG parsingcomplexity is high polynomial. We proposed a pruning techique thatutilizes IBM Model 1 to estimate the inside and outside probability of abitext cell. Taking a step further, we applied the A* parsing having beenused for monolingual parsing to ITG.  I will talk about the heuristicestimates we used for A* parsing for Viterbi alignment selection anddecoding.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 May 2005</td>
<td align=left valign=top>Radu Soricut</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_May_2005');">
Towards Developing Generation Algorithms for Text-to-Text
</a><br>
<span id=abs27_May_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Small<br>
<b>Abstract:</b> We describe a new sentence realization framework for text-to-textapplications. This framework uses IDL-expressions as a representationformalism, and a generation mechanism based on algorithms for intersectingIDL-expressions with probabilistic language models. We present boththeoretical and empirical results concerning the correctness andefficiency of these algorithms.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>13 May 2005</td>
<td align=left valign=top>Ed Stabler (UCLA)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs13_May_2005');">
Natural Logic
</a><br>
<span id=abs13_May_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I will describe some recent work on "natural logics", logics for languagesthat are more similar to human languages than traditional first orderpredicate logic, giving particular attention to questions about what thesyntax encodes about semantic relations among sentences. On everyone'sview, some but not all entailments are syntactically encoded (in a sensethat I will define precisely), but, beyond this starting point,controversy starts almost immediately. Considering some particularexamples, I will sketch methods for addressing some of the basicquestions.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Apr 2005</td>
<td align=left valign=top>Deepak Ravichandran</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Apr_2005');">
Working with Large Corpus, High speed clustering and its applications
</a><br>
<span id=abs22_Apr_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I am going to be talking about stuff that I have been working over thepast 6-9 months. This includes randomized algorithms and its applicationto 2 NLP problems: noun clustering and noun-pair clustering. I will alsobe commenting on my experience of working with very very large amounts ofreal Natural Language text (This includes processing and working with dataavailable from the web. This corpus is not the standard newspaper textthat we are so used to in the NLP community.) This talk will also cover alarge part of my thesis work.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>08 Apr 2005</td>
<td align=left valign=top>Jamie Callan (CMU)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs08_Apr_2005');">
Search Engines for HLT Applications
</a><br>
<span id=abs08_Apr_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> TBA<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Mar 2005</td>
<td align=left valign=top>Dagen Wang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Mar_2005');">
Metalinguistic feature study for spontaneous speech in human computer interaction
</a><br>
<span id=abs25_Mar_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large (THIS HAS CHANGED!!!)<br>
<b>Abstract:</b> Speech is a crucial component in human computer interaction. Whiletremendous progress has been made in automatic speech recognition, speechtranscription -- which is the output of automatic speech recognition -- isfar from providing all the information that one could retrieve fromspeech. For example, prominence, pause, rhythm, and rate of speech allcarry important information in speech and are crucial in speechperception. Inclusion of such information can facilitate better machinerecognition and understanding of speech.<p>In this talk, we will introduce the research effort and result in speechrate, prominence, disfluency and utterance boundary detection. We willalso show some interesting applications utilizing these features innatural language understanding and dialog management.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 Mar 2005</td>
<td align=left valign=top>Ed Hovy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_Mar_2005');">
Methodologies of ontology content construction
</a><br>
<span id=abs18_Mar_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk is the second in three tutorial lectures on ontologies.  Itfirst shows some details of various Upper Ontologies-ResearchCYC, SUMO,DOLCE, and the Penman Upper Model.  It then discusses the problem ofcreating content for the 'Middle Model' zone of ontologies, and outlines amethodology for moving from words to word senses to concepts.  Itconcludes by describing ISI's Omega ontology and showing how Omega hasbeen used in annotation projects to support semantic labeling of texts.<p>Please bring a pen or pencil and some paper; there is a small exercise!<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 Feb 2005</td>
<td align=left valign=top>Inderjeet Mani (Georgetown)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_Feb_2005');">
TBA
</a><br>
<span id=abs18_Feb_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> TBA<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Feb 2005</td>
<td align=left valign=top>Tim Chklovski</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Feb_2005');">
Collecting Broad-Coverage Knowledge Bases from Volunteers
</a><br>
<span id=abs14_Feb_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> (Note that this is a MONDAY!)<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>11 Feb 2005</td>
<td align=left valign=top>Hae-Chang Rim</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs11_Feb_2005');">
Unsupervised Word Sense Disambiguation Using Wordnet Relatives
</a><br>
<span id=abs11_Feb_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>28 Jan 2005</td>
<td align=left valign=top>Yutaka Sasaki (ATR)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs28_Jan_2005');">
Research Activities in Speech Translation at ATR/QA as Question-Biased Term Extraction
</a><br>
<span id=abs28_Jan_2005 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk has two parts. In the first part, I will introduce researchactivities in Speech-to-Speech Translation at ATR, including on-goingresearch on statistical machine translation. In the second part, I willpresent a new approach to QA named Question-Biased Term Extraction (QBTE).The QBTE directly extracts answers as terms biased by the question. Toconfirm the feasibility of our QBTE approach, we conducted experiments onthe CRL QA Data based on 10-fold cross validation, using Maximum EntropyModels as an ML technique. Experimental results showed that the trainedsystem achieved approximately 0.35 in MRR and 50% in TOP5 accuracy. Thispart is an English version of my presentation given in IPSJ SIGNL-163 in2004 in Japanese. If time allows, I would like to introduce the NTCIR-5(2004/2005) Cross-Lingual QA task (CLQA) that I am going to organize.<p>About the speaker:<p>Yutaka Sasaki received his Ph.D. in Engineering from the University ofTsukuba, Japan in 2000 for his work on generating Information Extractionrules with hierarchically sored Inductive Logic Programming. He joined NTTLaboratories in 1988. Since then, he was involved in research inrule-based CAI, inductive logic programming, Information Extraction, andQuestion Answering. From 1995 to 1996, he spent one year at Simon FraserUniversity, Canada as a visiting researcher. From 1999, he led a subgroupto develop the first practical Japanese Question Answering System SAIQA.Then, he applied SVMs to automatically construct the QA system SAIQA-IIfrom QA and NE data. In June 2004, he moved to ATR Spoken LanguageTranslation Research Laboratories. Currently, he is the head of Departmentof Natural Language Processing. He is also an organizer of the NTCIR 5Cross-Lingual Question Answering Task.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Dec 2004</td>
<td align=left valign=top>Nicola Ueffing</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Dec_2004');">
Word-Level Confidence Measures for SMT
</a><br>
<span id=abs17_Dec_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk will address the problem of assessing the correctness of MToutput on the word level. I will give an overview on word confidencemeasures for SMT.  Different variants of word posterior probabilities thatcan be directly used as confidence measure will be presented. Theirconnection with the Bayes decision rule and the underlying error measurewill be shown. Experimental comparison of different word confidencemeasures will be presented on a translation task consisting of technicalmanuals.<p>Additionally, I will show how word confidence measures can be applied inan interactive SMT system. This system predicts translations, taking partsof the sentence into account that have already been accepted or typed bythe user. Through the use of confidence measures, the performance of theprediction engine can be improved.<p><p>About the Speaker:<p>Nicola Ueffing is a graduate research assistant at the group for "HumanLanguage Technology and Pattern Recognition" (Lehrstuhl fuer InformatikVI) at RWTH Aachen University. She received her diploma in mathematicsfrom RWTH Aachen University in 2000. Her research topic is statisticalmachine translation, focusing on confidence measures for SMT. In 2003, shewas a member of the team working on "Confidence Estimation for SMT" at theCLSP workshop at JHU.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Dec 2004</td>
<td align=left valign=top>Nick Mote</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Dec_2004');">
Developing a Language Model for Second Language Learner Speech
</a><br>
<span id=abs10_Dec_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> ISI's Tactical Language Project is a system designed to teach Americanshow to speak Arabic through a video game environment. We've taken a FPSengine (Unreal 2003) and re-did the graphics so it looks like you're in atypical Lebanese village. We took away the guns, added speech recognition,and set the player in the middle of it all. The theory is that if youlearn well in a classroom, you'll perform well in a classroom, but if youlearn well in a pseudo-naturalistic environment, you'll perform better inreal life.<p>In a pedagogical context, speech recognition is a hard thing we're tryingto recover signal from noisy language-learner speech--with all of itsmispronunciations, disfluencies, and grammatical errors . Languageunderstanding is hopeless unless you have a good approximation of whatkinds of mistakes learners make, and you can build a system to anticipatethem.<p>Suppose an English language learner says "Water". Is he asking you forwater? Is he telling you there's a puddle in front of you? Is he sayinghis name is "Walter", but with horrible pronunciation? There's a lot ofambiguity involved. In order to disambiguate, we need to look at thespeech signal itself, the utterance's context, the learner's past languageperformance, and details about the learner's mother language as it relatesto English, etc., etc... Only then can we hope to guess what the learneris actually trying to say.<p>And then, of course, once we've made a good guess at the learner's speechintentions, what do we do about it? How do we correct him? How do webalance the consideration of inherent qualities of learner motivation,language errors, learning objectives, and possibly low-confidence speechrecognition, as we generate good pedagogical feedback?<p>This is NLP (primarily statistical) with a bit of pedagogy theory andlinguistic (SLA and phonology) theory sprinkled in.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 Nov 2004</td>
<td align=left valign=top>Chin-Yew Lin</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_Nov_2004');">
After TIDES, What's Left? - Finding Basic Elements
</a><br>
<span id=abs19_Nov_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> As DARPA's TIDES (Translingual Information Detection, Extraction, andSummarization) program coming to an end, I will give a summary of what wehave learned from TIDES in summarization and a brief overview of ourcurrent effort in developing automatic evaluation methods that go beyondsurface n-gram matching. Topics to be covered:<p>(1) Summary of DUCs 2001 - 2004(2) Automatic Evaluations in Summarization and MT(3) Basic Elements - New Efforts in Summarization at ISI<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Nov 2004</td>
<td align=left valign=top>Thiago Pardo</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Nov_2004');">
Unsupervised learning of verb argument structures
</a><br>
<span id=abs15_Nov_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm (note the strange date!)<br>
<b>Location:</b> 8th floor multipurpose room (#849) -- NOT the conference room<br>
<b>Abstract:</b> In this talk, I'll present the investigation I'm carrying out in ISIlately under Daniel Marcu's supervision.  Following the noisy-channelframework, we propose a statistical model for learning the argumentstructures of verbs automatically.  We show that we are able to learn bothlexicalized and generalized structures and achieve good results, relyingonly on basic NLP tools like a POS tagger and named-entity recognizer. Wealso present a comparison of the structures we learn with the predictedones in PropBank.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>12 Nov 2004</td>
<td align=left valign=top>Dragomir Radev</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs12_Nov_2004');">
Words, links, and patterns: novel representations for Web-scale text mining
</a><br>
<span id=abs12_Nov_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Textual data is everywhere, in email and scientific papers, in onlinenewspapers and e-commerce sites. The Web contains more than 200 terabytesof text not even counting the contents of dynamic textual databases. Thisenormous source of knowledge is seriously underexploited. Textualdocuments on the Web are very hard to model computationally: they aremostly unstructured, time-dependent, collectively authored, multilingual,and of uneven importance.  Traditional grammar-based techniques don'tscale up to address such problems. Novel representations and analyticaltools are needed.<p>I will discuss several current projects at Michigan related to text miningfrom a variety of genres. Depending on the amount of time, I will talkabout (a) lexical centrality for multidocument summarization, (b)syntax-based sentence alignment, (c) graph-based classification,(d)lexical models of Web growth, and (e) mining protein interactions fromscientific papers. As it turns out, the right representations, whencomplemented with traditional NLP and IR techniques, turn many of theseinto instances of better studied problems in areas such as socialnetworks, statistical mechanics, sequence analysis, and computationalphylogenetics.<p><p><p>About the Speaker:<p>Dragomir R. Radev is Assistant Professor of Information, ElectricalEngineering and Computer Science, and Linguistics at the University ofMichigan, Ann Arbor.  He leads the CLAIR (Computational LingusiticsAnd Information Retrieval) group which currently includes 12undergraduate and graduate students.  Dragomir holds a Ph.D. inComputer Science from Columbia University.  Before joining Michigan,he was a Research Staff Member at IBM's TJ Watson Research Center inHawthorne, NY.  He is the author of more than 45 papers on informationretrieval, text summarization, graph models of the Web, questionanswering, machine translation, text generation, and informationextraction.  Dr. Radev's current research on probabilistic andlink-based methods for exploiting very large textual repositories,representing and acquiring knowledge of genome regulation, andsemantic entity and relation extraction from Web-scale text documentcollections is supported by NSF and NIH.  Dragomir serves on theHLT-NAACL advisory committee, was recently reelected as treasurer ofNAACL, is a member of the editorial boards of JAIR and InformationRetrieval, and is a four-time finalist at the ACM internationalprogramming finals (as contestant in 1993 and as coach in1995-1997). Dragomir received a graduate teaching award at Columbiaand recently, the U. of Michigan award for Outstanding ResearchMentorship (UROP).<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Nov 2004</td>
<td align=left valign=top>Mary Wood (Manchester)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Nov_2004');">
A Human-Computer Collaborative Approach to Computer Aided Assessment
</a><br>
<span id=abs05_Nov_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The ABC (Assess by Computer) system has been developed and used in theSchool of Computer Science at the University of Manchester for formativeand (principally) summative assessment at undergraduate and postgraduatelevel. We believe that fully automatic marking of constructed answers -especially free text answers - is not a sensible aim. Instead - drawing onparallels in the history of machine translation - we take a"human-computer collaborative" approach, in which the system does what itcan to support the efficiency and consistency of the human marker, whokeeps the final judgement.<p>Our current work focuses on what are generally referred to as "short textanswers" as contrasted to "essays". However we prefer to contrast"factual" with "discursive" answers, and speculate that the former may beamenable to simple statistical techniques, while the latter require moresophisticated natural language analysis. I will show some examples of realexam data and the techniques we are using and developing to handle them.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Oct 2004</td>
<td align=left valign=top>Jerry Hobbs</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Oct_2004');">
Like Now:  Two Explorations in Deep Lexical Semantics
</a><br>
<span id=abs22_Oct_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> As part of an effort to encode the commonsense knowledge we need innatural language understanding, I have been looking at several very commonwords and their uses in diverse corpora, and asking what we have to knowto understand this word in this context.  In this talk, I will describethe investigations of the uses of two words -- the adverb "now" and thepreposition "like".<p>One might think that "now" simply expresses a temporal property of anevent.  But in fact in almost every instance, it is used to point up acontrast -- "This is true now.  Something else was true then."  It is thusmore of a relation than a property.  I will describe several categories ofsuch relations.  Another question of interest about "now" is "How long aperiod is the word "now" describing in its various uses?": "I'm typing anabstract now" vs. "We travel by automobile now."  I suggest somecategories of knowledge that need to be encoded to answer this question.<p>When we successfully understand "A is like B", we have figured out someproperty that A and B have in common.  How can we find that propertycomputationally?  In the data I looked at, in 80% of the instances, theproperty is explicit in the nearby text, and I will talk about how we canidentify it.  For the remainder I examine the knowledge we would need inorder to infer the common property.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Sep 2004</td>
<td align=left valign=top>Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Sep_2004');">
Domain Adaptation in Maximum Extropy Models
</a><br>
<span id=abs24_Sep_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I will present some preliminary results on the problem of domainadaptation in maximum entropy models, specifically in the case when thereis a large amount of "out of domain" data, and only a very small amount of"in domain" data.  The model and algorithms I present are based on thetechnique of conditional Expectation Maximization (CEM) and allow forrelatively fast optimization of these models.  Preliminary results on sometasks are quite promising.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Sep 2004</td>
<td align=left valign=top>Various</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Sep_2004');">
About Syntax Fest 2004 (Part II)
</a><br>
<span id=abs17_Sep_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This summer we held a three-month workshop on syntax-driven machinetranslation, in which we learned syntactic transformations automaticallyfrom Chinese/English translated corpora and applied them to translate newtext.  We'll give a progress report!<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Sep 2004</td>
<td align=left valign=top>Various</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Sep_2004');">
About Syntax Fest 2004 (Part I)
</a><br>
<span id=abs10_Sep_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This summer we held a three-month workshop on syntax-driven machinetranslation, in which we learned syntactic transformations automaticallyfrom Chinese/English translated corpora and applied them to translate newtext.  We'll give a progress report!<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Aug 2004</td>
<td align=left valign=top>Patrick Pantel & Tim Chklovski</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Aug_2004');">
VerbOcean: Mining the Web for Fine-Grained Semantic Verb Relations
</a><br>
<span id=abs16_Aug_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 3:30 pm (note the strange time)<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Broad-coverage repositories of semantic relations between verbs couldbenefit many NLP tasks. We present a semi-automatic method for extractingfine-grained semantic relations between verbs. We detect similarity,strength, antonymy, enablement, and temporal happens-before relationsbetween pairs of strongly associated verbs using lexico-syntactic patternsover the Web. On a set of 29,165 strongly associated verb pairs, ourextraction algorithm yielded 65.5% accuracy. We provide the resource,called VerbOcean, for download at http://semantics.isi.edu/ocean/. We willalso discuss current work on disambiguating the verbs in the network aswell as refining the semantic relations using path analysis.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>13 Aug 2004</td>
<td align=left valign=top>Deepak Ravichandran</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs13_Aug_2004');">
Randomized algorithms and its application to NLP
</a><br>
<span id=abs13_Aug_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The last decade has seen a plethora of papers in NLP devoted to MachineLearning algorithms. However, most of these papers have devoted theireffort exclusively to improving the system performance on the accuracyaxis. Most of the sophisticated NLP algorithms are extremely slow and donot scale up easily when applied to large amounts of data.<p>I will talk about the importance of randomized algorithms and theirpotential in speeding up some NLP algorithms. This talk will be a surveyof some recent advances in Theoretical Computer Science/Math seen with anNLP point-of-view. I am not going to present any results. But I am hopingthat this talk will clarify my thinking process, get feedback from peopleand help me colloborate with others.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 Aug 2004</td>
<td align=left valign=top>Justin Busch, Hai Huang, Jens Stephan & Chen-kang Yang</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_Aug_2004');">
CL Student Presentations
</a><br>
<span id=abs09_Aug_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Justin Busch:Weight and Semantic Class Issues in Japanese Noun Phrase Ordering<p>Many current designs for automatic parsers learn probabilities for therelative frequencies of parts-of-speech and syntactic rules, and this hasproven to be generally reliable. In spite of the ubiquity of probabilistictechniques for parsing, however, little attention has been given to thelinguistic significance of the probabilistic data and what it might sayabout human performance.<p>Hawkins proposes a general theory of grammaticalization based on theminimization of syntactic domains. Given that a sentence of any languagewill contain at least one noun phrase, one verb, and possibly additionalnoun phrases and prepositional phrases, "minimize domains" suggests thatthese phrases will order themselves according to whichever patternrequires the least effort to recognize the higher syntactic structure ofthe sentence. These effects are directly measurable through corpusstatistics, and can be interpreted as potential heuristics forprobabilistic parsers.  In this study, we examine Japanese data from theKyoto Treebank and test Hawkins' predictions for noun phrase ordering bynoun phrase weight as well as by generic semantic types. The discussionwill focus primarily on how accurately Hawkins' predictions are reflectedin the corpus statistics, and will conclude with observations about howthey might be applied to the decision mechanisms of probabilistic parsers.<p>--------------------------------------------------------------------------<p>Hai Huang:TBA<p>--------------------------------------------------------------------------<p>Jens Stephan:Evaluation and Visualization of a Dialogue System<p>Evaluations have become a necessary standard to almost any type ofresearch. However, there are many areas where there is no common agreementon how to evaluate, which is the case for complex problem of evaluatingdialogue systems. The evaluation of the multi party multi modal dialoguesystem MRE(1) provides a good example of what questions are important forsuch an evaluation, how to actually do the evaluation and finally how tohow make special problems of the system visible to use the evaluationresults to improve the systems performance.<p>After a brief introduction of the MRE domain and architecture, I willbreak the task town to a set of general evaluation questions. From there Iwill explain what kinds of metrics and visualizations are suited to answerthose questions and what kind of data is needed, as well as how that datawas obtained. Along the road, examples of actual system problems andperformances will be presented. The topics of data formatting andvisualization will receive some special attention by introducing the MREEvaluation Toolkit as well as the corpus it operates on.<p>--------------------------------------------------------------------------<p>Chen-kang Yang:Using the Omega Ontology to Determine Selectional Restrictions for Word Sense Disambiguation<p>Word sense disambiguation is fundamental for language processing. Thoughpurely statistical methods are effective for this task, they neglect thesyntactic and semantic aspects. In this study, we adopt a hybrid approachby applying an unsupervised machine learning method to learn verbsselectional restrictions on their subjects/objects. The system then usesthese learned selectional restrictions for word sense disambiguation ofthe subjects/objects. Instead of words, the training data containsontological taxonomy hierarchies that are retrieved from the Omegaontology. Unlike other similar systems, we are able to automatically findthe best match among classes from different levels of the ontology. Thisprovides us more flexibility and is closer to human instinct. Our systemperforms better than other similar systems, though it still needscooperating methods for better results.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>06 Aug 2004</td>
<td align=left valign=top>Hae-Chang Rim</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs06_Aug_2004');">
Information Retrieval using Word Senses: Root Sense Tagging Approach
</a><br>
<span id=abs06_Aug_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Information retrieval using word senses is emerging as a good researchchallenge on semantic information retrieval. In this presentation, I amgoing to propose a new method using word senses in information retrieval:root sense tagging method. This method assigns coarse-grained word sensesdefined in WordNet to query terms and document terms by unsupervised wayusing co-occurrence information constructed automatically. The sensetagger is crude, but performs consistent disambiguation by consideringonly the single most informative word as evidence to disambiguate thetarget word. We also allow multiple-sense assignment to alleviate theproblem caused by incorrect disambiguation.<p>Experimental results on a large-scale TREC collection show that theproposed approach to improve retrieval effectiveness is successful, whilemost of the previous work failed to improve performances even on smalltext collection. The proposed method also shows promising results when iscombined with pseudo relevance feedback and state-of-the-art retrievalfunction such as BM25.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Jul 2004</td>
<td align=left valign=top>Hal Daume III and Radu Soricut</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Jul_2004');">
Practice Talks for ACL (+workshops)
</a><br>
<span id=abs16_Jul_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> TBA<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 Jul 2004</td>
<td align=left valign=top>Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_Jul_2004');">
Survey of Trees and Grammars
</a><br>
<span id=abs09_Jul_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I'll give a survey of trees and grammars, at least the parts that seemmost relevant to ongoing work at ISI.  This will be a theory talk.  I'llstart with context-free grammars, which were developed in the 1950s, andcover other tree-generating systems.  I'll also talk abouttree-transforming systems.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 Jul 2004</td>
<td align=left valign=top>Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_Jul_2004');">
A Phrase-Based HMM Approach to Document/Abstract Alignment
</a><br>
<span id=abs02_Jul_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 1:30 pm - 3:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I will present work that extends the standard hidden Markov model to aversion that can emit multiple symbols in a single time step.  Using thismodel, we are able to automatically create phrase-to-phrase mappings in analignment process.  I've applied this model to the task of creatingalignments between documents and their human-written abstracts, yieldingan overall alignment F-score of 0.548, a significant improvement on thebest results to date of 0.363.  These results are published in an EMNLPpaper this year, but the talk will be an extended version of the talk Iwill give there (namely, I will discuss the mechanics of the extended HMMin more detail in this seminar).<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Jun 2004</td>
<td align=left valign=top>Dan Gildea</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Jun_2004');">
Syntactic Supervision and Tree-Based Alignment
</a><br>
<span id=abs25_Jun_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Tree-based probability models of translation have been proposed to takeadvantage of parse trees on one, both, or neither sides of a parallelcorpus.  I will present comparative results for these three approaches forthe task of word alignment on Chinese-English and French-English data, aswell as some analysis of what is going on behind the numbers.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>21 Jun 2004</td>
<td align=left valign=top>Emil Ettelaie</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs21_Jun_2004');">
Speech-to-Speech Translation: A Phrase Classification Approach
</a><br>
<span id=abs21_Jun_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk will be about automatic speech-to-speech translation.  In oursystem, a doctor speaks one language, the patient speaks another language,and the machine translates their utterances from one language to theother.  The talk will be followed by a demo of our system.<p>One approach we have been successful with is phrase classification, i.e.,classifying a noisy speech-recognized utterance into one of many meaningcategories.  Phrase classification is computationally cheap and canprovide high quality translations for in domain utterances almostinstantaneously. Speed is important for speech translation, whereprocessing delay is a great concern.<p>In this talk, different aspects of building a classification-based speechtranslator are discussed. Following an overview of automaticspeech-to-speech translation and its challenges, a comparison of differentclassification methods is presented and data collection techniques forthat application are introduced.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Jun 2004</td>
<td align=left valign=top>Marcello Federico</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Jun_2004');">
Statistical Machine Translation at ITC-irst
</a><br>
<span id=abs17_Jun_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 4th Floor<br>
<b>Abstract:</b> My presentation will overview recent activities on Chinese-English SMTcarried out at ITC-irst (Trento, Italy).  After an overview of thecomplete architecture of our system, I will focus on progress made inChinese word-segmentation, phrase-based modeling and decoding, log-linearmodeling and minimum error training, and language model adaptation.Experimental results will be provided in terms of Bleu and Nist scores ontwo translation tasks:  basic traveling expressions and news reports,respectively adopted by the C-STAR consortium and for the 2002 and 2003NIST MT evaluation campaigns.<p>Bio:<p>Marcello Federico has been a permanent researcher at ITC-irst since 1991.During 1998-2003, he led the "Multilingual natural speech technologies"(MUNST)  research line at ITC-irst.  Since 2004, he is head of the"Cross-language information processing" (Hermes) research line. Hisinterests include automatic speech recognition, statistical languagemodeling, information retrieval, and machine translation.<p><p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 May 2004</td>
<td align=left valign=top>Philipp Koehn</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_May_2004');">
Challenges in Statistical Machine Translation
</a><br>
<span id=abs24_May_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In the last years a standard model in statistical machinetranslation has emerged, which is based on the translationof sequences of words (so-called "phrases") at a time.I will describe this model, how to train and decode with it,but the focus of this talk will be how to address thechallenges to advance and move beyond the model: my thesiswork on noun phrase translation, making use of syntax, andbetter modeling, such as discriminative training.<p>Bio: Philipp Koehn is the author of papers on natural languageprocessing, machine translation, and machine learning. Hereceived his PhD from the University of Southern Californiain 2003 (advisor: Kevin Knight), and is currently employed asa postdoc at the Massachusetts Institute of Technology, workingwith Michael Collins. He has worked at AT&T Laboratories ontext-to-speech systems, and at WhizBang! Labs on textcategorization.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>21 May 2004</td>
<td align=left valign=top>Tom Murray and Rahul Bhagat</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs21_May_2004');">
Statistical Learning for Dialogue System <b>and</b> A Community of Words
</a><br>
<span id=abs21_May_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <b>Natural Language Understanding: A fast and accurate Statistical Learning Approach for Dialogue Systems</b><p>Natural Language Understanding (NLU) is an essential module of a gooddialogue system. To achieve satisfactory performance levels, real timedialogue systems need the NLU module to be both fast and accurate. FiniteState Model (FSM) based systems are fast and accurate but lack robustnessand flexibility. The Statistical Learning Model (SLM) based systems arerobust and flexible but lack accuracy and are at most times slow.<p>In this talk, I am going to talk about an SLM based NLU approach fordialogue utterances that is both accurate and fast. The system has highaccuracy and produces frames in real time.<p><b>A Community of Words: Understanding Social Relationships from E-mail</b><p>A corpus of e-mail messages presents a number of challenges for NLPtechniques, with its nearly unconstrained structure and vocabulary,mistyped words and ungrammatical sentences, and extensive contextualinformation that is never explicitly stated. Yet, the intrinsically socialnature of such communication provides an opportunity to study not just abag of words, but also the relationships, competencies, and activitiesbehind them.<p>This talk presents work with Eduard Hovy as part of the MKIDS project.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Apr 2004</td>
<td align=left valign=top>Liang Zhou</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Apr_2004');">
Automating the Building of Summarization Systems
</a><br>
<span id=abs30_Apr_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Summarization requires one to identify the internal structure ofinformation and to bring that to the surface both operationally andorganizationally.<p>How does one put this theory to practice and build real summarizationsystems? How do the systems built based on this idea perform?<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>28 Apr 2004</td>
<td align=left valign=top>Dragos Muntanu, Radu Soricut and Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs28_Apr_2004');">
Practice Talks for HLT/NAACL
</a><br>
<span id=abs28_Apr_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> TBA<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 Apr 2004</td>
<td align=left valign=top>Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_Apr_2004');">
A Tree-Position Kernel for Document Compression
</a><br>
<span id=abs23_Apr_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 10 Large<br>
<b>Abstract:</b> I'll describe our entry into the DUC 2004 automatic document summarizationcompetition.  We competed only in the single document, headline generationtask.  Our system is based on a novel kernel dubbed the tree positionkernel, combined with two other well-known kernels.  Our system performswell on white-box evaluations, but does very poorly in the overall DUCevaluation.  C'est la vie.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Apr 2004</td>
<td align=left valign=top>Rada Mihalcea (UNT)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Apr_2004');">
Graph-based Ranking Algorithms for Language Processing
</a><br>
<span id=abs16_Apr_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 12:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Although we live in a predominantly statistical world, there are stillmany language processing applications that long for accuraterepresentations of text meaning. Even applications that found partialsolutions in statistical modeling, including information retrieval,machine translation, or automatic summarization, are likely to get asignificant boost from deeper text understanding.<p>In this talk, I will present an innovative method for automatic extractionof conceptual graphs as a means to represent text meaning.  The methodrelies on a novel adaptation of graph-based ranking algorithms -traditionally (and successfully) used in citation analysis, Web pageranking, and social networks. I will show how such algorithms can beadapted to semantic networks, resulting in an efficient unsupervisedmethod for resolving the semantic ambiguity of all words in open text, andidentifying relations between entities in the text. I will also outline anumber of applications that are enabled by this representation, includingkeyphrase extraction, domain classification, and extractive summarization.<p>BIO: Rada Mihalcea is an Assistant Professor of Computer Science atUniversity of North Texas. Her research interests are in lexicalsemantics, minimally supervised natural language learning, andmultilingual natural language processing. She is currently involved in anumber of research projects, including word sense disambiguation, shallowsemantic parsing, (non-traditional) methods for building annotated corporawith volunteer contributions over the Web, word alignment for languagepairs with scarce resources, and graph-based ranking algorithms forlanguage processing. Her research is supported by NSF and the state ofTexas.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>13 Apr 2004</td>
<td align=left valign=top>Jill Burstein (ETS)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs13_Apr_2004');">
Automated Essay Evaluation: From NLP research through deployment as a business
</a><br>
<span id=abs13_Apr_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 4 Large<br>
<b>Abstract:</b> Automated essay scoring was initially motivated by its potential costsavings for large-scale writing assessments.  However, as automated essayscoring became more widely available and accepted, teachers and assessmentexperts realized that the potential of the technology could go way beyondjust essay scoring.  Over the past five years or so, there has been rapiddevelopment, and commercial deployment of automated essay evaluation forboth large-scale assessment and classroom instruction.  A number offactors contribute to an essay score, including varying sentencestructure, grammatical correctness, appropriate word choice, errors inspelling and punctuation, use of transitional words/phrases, andorganization and development. Instructional software capabilities existthat provide essay scores and evaluations of student essay writing in allof these domains.  The foundation of automated essay evaluation softwareis rooted in NLP research.  This talk will walk through the development ofCriterionSM, e-rater, and Critique writing analysis tools, automated essayevaluation software developed at Educational Testing Service - from NLPresearch through deployment as a business.<p>(Preview of an HLT/NAACL-2004 Invited Speaker Presentation)<p>Jill BursteinEducational Testing ServicePrinceton, NJ<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 Apr 2004</td>
<td align=left valign=top>Eduard Hovy</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_Apr_2004');">
Three (and a half?) Trends: The Future of NLP
</a><br>
<span id=abs09_Apr_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> An interesting (disturbing?) new trend is beginning to manifest itself inNLP, one that is focused on performance and hence very attractive in thecontext of inter-system competitive evaluations such as TREC and DUC, butone that does not provide much insight about language or NLP methods tothe researcher interested in these topics.  This addition of a newparadigm to NLP has implications for all of us.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 Apr 2004</td>
<td align=left valign=top>Stephan Vogel</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_Apr_2004');">
The CMU Statistical Machine Translation System
</a><br>
<span id=abs02_Apr_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The presentation will give an overview of the SMT activities at theLanguage Technologies Institute, Carnegie Mellon University, in largevocabulary text translation tasks, esp. the Chinese-English andArabic-English, as well as in limited domain speech-to-speech translationtasks.  The CMU SMT system is, like most modern statistical MT systems,based on phrase translation.  Several approaches have been developed toextract the phrase pairs from parallel corpora and current researchinvestigates different scoring approaches for these translation pairs.Details of the decoder, esp. on hypothesis recombination, pruning, andefficient n-best list generation will be given.  Recently, the SMT systemhas been extended to use partial translations generated from example basedand grammar based translation system, thereby performing multi-enginemachine translation.<p>Bio:<p>Stephan Vogel is a researcher at the Language Technologies Institute,Carnegie Mellon University, where he heads the statistical machinetranslation team.  He received a Diploma in Physics from PhilipsUniversity Marburg, Germany, and a Masters of Philosophy from theUniversity of Cambridge, England.  After working for a number of years onthe history of science, he turned to computer science, especially naturallanguage processing.  Before coming to CMU, he worked for several years atthe Technical Univerity of Aachen on statistical machine translation, andalso in the Interactive Systems Lab at the University of Karlsruhe.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>26 Mar 2004</td>
<td align=left valign=top>Shlomo Argamon</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs26_Mar_2004');">
On Writing, Our Selves: Explorations in Stylistic Text Categorization
</a><br>
<span id=abs26_Mar_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 1:30 pm - 3:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> This talk will survey results of several recent projects we have beenundertaking in automated text categorization based upon the style,rather than the topic, of the documents.  I will describe a generaltext-categorization framework using machine learning along with generalprinciples for choosing stylistically relevant sets of features forlearning effective classification models.  Applications of these methodsinclude determining author gender and text genre in published books andarticles, authorship attribution of email messages, and analysis oflanguage use in different scientific fields.  In many cases, the modelsthat are learned also give some insight into the respective styles beingdistinguished, which I will also discuss.<p>Shlomo Argamon is an associate professor at the Illinois Institute ofTechnology Chicago.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Mar 2004</td>
<td align=left valign=top>Jon Patrick (U. of Sydney)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Mar_2004');">
ScamSeek: Capturing Financial Scams at the Coalface by Language Technology
</a><br>
<span id=abs25_Mar_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 12:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The Scamseek project aims to build a surveillance tool for identifyingfinancial scams on the Internet by performing document classification ofInternet pages. There are three principle types of documents of concern:those that give financial advice by unregistered advisors, unlawfulinvestment schemes, and share ramping.<p>The first phase of the project has been completed and a working system,known as ScamAlert installed at the Australian Securities and InvestmentCommission (ASIC). The independent audit of the performance of the systemproved satisfactory with a result for precision of .75, recall .43, andF=. 54, along with identification of 4 scams misclassified by the client.Significant improvement in recall is foreshadowed in the 2nd phase of theproject.  The results are satisfying in the context of the structure ofthe data where the density of scam documents is about 1.8% of the totalcorpus.<p>The good performance of the operational system is ascribed to thecombination of using a strong linguistic model of language (SystemicFunctional Linguistics) to define the scam documents in parallel with arich statistical analysis of the structure of non-scam documents and scamlook-alikes. A large amount of the experimental program has concentratedon understanding and exploiting the interaction between the linguisticallydescribed aspects of the documents and the statistical properties. Eachtype of data has been used to inform and modify the usage of the other.<p>The operational aspects of the project have proven to be as challenging asthe research objectives. The project has a budget of $2.2M over 15 months.It has been managed so as to create a balance in resources between theneeds of both the research objectives and the engineering objectives.Software development has concentrated on three aspects. Firstly, toproduce an environment for the strong directive management ofcomputational linguistics experiments, secondly, in the aid of thelinguists to create tools to support their manual analysis, and thirdlythe best practice of software engineering principles to ensure a cleanautomated rollout of the production system for ASIC.<p>The contributing partners in the Scamseek project are The Capital MarketsCo-operative Research Centre (CMCRC), ASIC, the University of Sydney andMacquarie University.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>12 Mar 2004</td>
<td align=left valign=top>Deepak Ravichandran</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs12_Mar_2004');">
About My Thesis Proposal
</a><br>
<span id=abs12_Mar_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> TBA<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>20 Feb 2004</td>
<td align=left valign=top>Hal Daume III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs20_Feb_2004');">
Some Results in Automatic Evaluation for Summarization and MT
</a><br>
<span id=abs20_Feb_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 4 Large<br>
<b>Abstract:</b> I will be presenting some recent results of mine regarding the possibilityof automatic evaluation in summarization.  I will discuss both my ownfindings, as well of those of people here and at Columbia, and attempt toexplain in a principled fashion why there are disparate opinions on theplausibility of performing automatic evaluation in this task.  I willdiscuss my (perhaps pessimistic) views on the plausibility of doing anysort of evaluation of summarization, automatic or otherwise.<p>The results and experimental setups developed in connection withsummarization will be extended to the machine translation.  I will reviewpossible reasons why metrics such a bleu have experienced significantlymore success in machine translation than in summarization.  I will alsoconnect the evaluation criterea developed in the context of summarizationto machine translation, and discuss the automation of these methods.<p>In short: I'll talk about why I've been doing so much data elicitaitonrecently.<p>This will be a highly informal seminar and participation is highlyencouraged.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>06 Feb 2004</td>
<td align=left valign=top>Mark Hopkins</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs06_Feb_2004');">
What's in a Translation Rule?
</a><br>
<span id=abs06_Feb_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We propose a theory that gives formal semantics to word-levelalignments defined over parallel corpora. We use our theory tointroduce a linear algorithm that can be used to derive fromword-aligned, parallel corpora the minimal set of syntacticallymotivated transformation rules that explain human translation data.<p>(joint work with Michel Galley, Kevin Knight, and Daniel Marcu)<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>30 Jan 2004</td>
<td align=left valign=top>Paul Kingsbury (Penn)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs30_Jan_2004');">
PropBank: the next stage of Treebank <b>and</b><br>Inducing a Chronology of the Pali Canon
</a><br>
<span id=abs30_Jan_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> PropBank: the next stage of Treebank<p>Natural-language engineers the world over are coming to a consensus that adegree of semantic knowledge is a necessary addition to purely structuralrepresentations of language.  This talk describes the Propbank project atPenn, which provides a complete shallow semantic parse of the Treebank IIcorpus.<p>Inducing a Chronology of the Pali Canon:<p>Works such as Kroch (1989), Taylor (1994) and Han (2000) have demonstratedthat syntactic change can be described mathematically as the competitionbetween innovating and archaic formations.  This paper demonstrates howthis same mathematical description can be turned around to predict thedate of a historical text.  The Middle Indic period showed dramatic changein the morphological system, such as the collapse of the past-tense verbalsystem.  Whereas Sanskrit had three competing formations, each withmultiple possible morphological realizations, Pali (a Middle Indo-Aryanlanguage) had only a single formation, based mostly on the sigmatic aoristalthough many archaic nonsigmatic aorists are also attested.  Theproportions of the archaic and innovative forms can be easily calculatedfor each text in the Pali Canon and these proportions used to assign anapproximate date for each text.  The accuracy of the method can beassessed qualitatively by comparing the derived chronology to chronologiesbased on various non-linguistic criteria, or quantitatively by comparingthe derived chronology to a known dating scheme.  For the latter it isnecessary to turn to a different dataset, such as that describing the riseof do-support in Early Modern English, as described in Ellegard (1953) andKroch (1989).<p>Bio:<p>Paul Kingsbury graduated summa cum laude in linguistics from Ohio StateUniversity in 1993 with a thesis on "Some sources for L-words inSanskrit".  He subsequently entered the University of Pennsylvania tostudy historical linguistics and Sanskrit, but (like most historicalstudents) was diverted to computational issues.  He joined the Propbankproject in 2000 and soon thereafter engineered a major rethinking of themethods and goals of the project, in order to make the annotationlinguistically meaningful.  He completed his doctorate in 2002 with athesis entitled 'The Chronology of the Pali Canon: the case of theaorist'.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 Jan 2004</td>
<td align=left valign=top>John Prager (IBM)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_Jan_2004');">
Using Constraints to Improve Question-Answering Accuracy
</a><br>
<span id=abs16_Jan_2004 style="display:none;">
<font size=-1>
<b>Time:</b> 2:00 pm - 3:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Leading Question-Answering systems employ a variety of means to boost theaccuracy of their answers.  Such methods include redundancy (getting thesame answer from multiple documents/sources), deeper parsing of questionsand texts (hence improving the accuracy of confidence measures),inferencing (proving the answer from information in texts plus backgroundknowledge) and sanity-checking (verifying that answers are consistent withknown facts).  To our knowledge, however, no QA system deliberately asksadditional questions in order to derive constraints on the answers to theoriginal questions.<p>We present in this talk the method of QA-by-Dossier-with-Constraints (QDC).This is an extension of the simpler method of QA-by-Dossier, in whichdefinitional questions ("Who/what is X") are addressed by asking a set ofquestions about anticipated properties of X.  In QDC, the collection ofDossier candidate answers, along with possibly other answers to questionsasked expressly for this purpose, are subjected to satisfying a set ofnaturally-arising constraints.  For example, for a "Who is X" question, thesystem will ask about birth, accomplishment and death dates, which, if theyexist, must occur in that order, and also obey other constraints such aslifespan.  Temporal, spatial and kinship relationships seem to beparticularly amenable to this treatment, but it would seem that almost any"factoid" question can benefit from QDC.  We will discuss the setting-upand application of constraint networks, and talk about how (and whether) todevelop the constraint sets automatically.  We will demonstrate severalapplications of QDC, and present one evaluation in which the F-measure fora set of questions improved with QDC from .39 to .69.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>19 Dec 2003</td>
<td align=left valign=top>Robert Krovetz (Ask Jeeves)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs19_Dec_2003');">
More than One Sense Per Discourse
</a><br>
<span id=abs19_Dec_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Previous research has indicated that when a polysemous word appears twoor more times in a discourse, it is extremely likely that they will allshare the same sense (Gale et al. 92). However, those results werebased on a coarse-grained distinction between senses (e.g, {\emsentence} in the sense of a `prison sentence' vs. a `grammaticalsentence'). I conducted an analysis of multiple senses within twosense-tagged corpora, Semcor and DSO. These corpora used WordNet fortheir sense inventory. I found significantly more occurrences ofmultiple-senses per discourse than reported in (Gale et al. 92) (33\%instead of 4\%). I also found classes of ambiguous words in which asmany as 45\% of the senses in the class co-occur within a document. Iwill discuss the implications of these results for the task ofword-sense tagging and for the way in which senses should berepresented.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Nov 2003</td>
<td align=left valign=top>Hang Li (MSR Beijing)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Nov_2003');">
Using Bilingual Data to Mine and Rank Translations
</a><br>
<span id=abs25_Nov_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 pm - 12:00 pm<br>
<b>Location:</b> 11th Floor Large<br>
<b>Abstract:</b> In this talk, I will introduce some of the technologies whichwe have developed in the project on an English reading assistant systemcalled English Reading Wizard. The technologies include a method formining translations from web (unparallel corpora), a method for wordtranslation disambiguation based on bootstrapping, which is calledBilingual Bootstrapping, and a general method of bootstrapping, which iscalled Collaborative Bootstrapping. First, I will introduce the mainfeatures of English Reading Wizard. Next, I will introduce each of themethods. The translation mining method is based on a naïve Bayesianensemble and the EM algorithm. Bilingual Bootstrapping uses theasymmetric translation relationship between words in the two languagesin translation and can construct reliable classifiers for wordtranslation disambiguation. Collaborative Bootstrapping contains theco-training algorithm as its special case, and it uses the strategy ofuncertainty reduction in training of the two classifiers.<p>Bio:<p>Hang Li is a researcher at the Natural Language Computing Groupof Microsoft Research in Beijing, China. He is also adjunct professor ofXian Jiaotong University. Hang Li obtained a B.S. in ElectricalEngineering from Kyoto University (Japan) in 1988 and a M.S. in ComputerScience from Kyoto University in 1990. He earned his Ph.D. in ComputerScience from the University of Tokyo in 1998. >From 1990 to 2001, HangLi worked at the Research Laboratories of NEC Corporation in Kawasaki,Japan. He joined Microsoft Research in 2001.  His research interestincludes statistical learning, natural language processing, data mining,and information retrieval. Hang Li's web site:http://research.microsoft.com/users/hangli/<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Nov 2003</td>
<td align=left valign=top>Dr. Kato and Dr. Fukomoto (NTCIR)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Nov_2003');">
An Overview of the QA Challenge + NTCIR -- The Way Ahead
</a><br>
<span id=abs17_Nov_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 10:30 am - 12:00 pm<br>
<b>Location:</b> 4th Floor<br>
<b>Abstract:</b> An Overview of Question Answering ChallengeJun'ichi Fukumoto and Tsuneaki Kato<p>In this talk, we will present an overview of Question AnsweringChallenge(QAC), which is the question answering task of the NTCIRWorkshop.  QAC-1 (the first evaluation of QAC) was carried outat NTCIR Workshop 3 in October 2002, and QAC-2 will be atNTCIR Workshop 4 in December 2003.  In the QAC, systems to beevaluated are expected to return exact answers consisting of a nounor noun compound denoting, for example, the names of persons,organizations, or various artifacts or numerical expressions suchas money, size, or date.  Those basically range over the NamedEntity (NE) elements of MUC and IREX but is not limited to them.QAC consists of three kinds of subtasks: Task 1, where the systemsare allowed to return ranked five possible answers; Task 2, wherethe systems are required to return a complete list of answers; andTask 3, the systems are required to answer series of questions, thathave anaphora and zero-anaphora.  We will present the results ofQAC-1, and vision and prospect of QAC-2.<p>NTCIR -- the Way AheadNoriko Kando<p>Dr. Noriko Kando is the leader of NTCIR(Test Collections and Evaluationof IR, Text Summarization, Q&A, etc) project, and an associate professorof National Institute of Informatics (NII).  She got her Ph. D in 1995from Keio University.  Her research interest includes evaluation ofinformation retrieval systems, technologies to "Make Information Usablefor Users", cross-lingual information retrieval, and analysis of textstructure, genre, citation & link  She is a member of editorial boards ofInternational Journal on Information Processing and Management,ACM-Transaction on Asian Language Information Processing, etc.<p>Jun'ichi Fukumoto and Tsuneaki Kato are task organizers of QAC.Dr. Jun'ichi Fukumoto is an associate professor of RitsumeikanUniversity.  He got his Ph. D in 1999 from University of ManchesterInstitute of Science and Technology.  His research interest includesQ&A, automatic summarization, and dialogue processing.Dr. Tsuneaki Kato is an associate professor of the University of Tokyo.He got his Dr. of Engineering in 1995 from Tokyo Institute ofTechnology.  His research interests includes multimodal dialogueprocessing, multimodal presentation generation and domain independentquestion and answering.  He is a member of editorial committee oftransaction on information and systems of The Institute of Electronics,Information and Communication Engineers.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Oct 2003</td>
<td align=left valign=top>Christopher Manning (Stanford)</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Oct_2003');">
Natural Language Parsing: Graphs, the A* Algorithm, and Modularity
</a><br>
<span id=abs27_Oct_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 10:00 am - 11:00 am<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Probabilistic parsing methods have in recent years transformed our ability torobustly find correct parses for open domain sentences.  Much of this work hasbeen within a common architecture of heuristic search for good pares inlexicalized probabilistic context-free grammars, with many layers of back-offto avoid problems of sparse data.<p>In this talk, I will outline some different ideas that we have been pursuing.I will connect stochastic parsing with finding shortest paths in hypergraphs,and show how this approach naturally provides a chart parser for arbitraryprobabilistic context-free grammars (finding shortest paths in a hypergraph iseasy; the central problem of parsing is that the hypergraph has to beconstructed on the fly). From this viewpoint, a natural approach is to use theA* algorithm to cut down the work in finding the best parse. On unlexicalizedgrammars, this can reduce the parsing work done dramatically, by at least 97%.This approach is competitive with methods standardly used in statisticalparsers, while ensuring optimality, unlike most heuristic approaches tobest-first parsing.<p>Finally, I will present a novel modular generative model in which semantic(lexical dependency) and syntactic structures are scored separately. Thisfactored model is conceptually simple, linguistically interesting, admits exactinferenence with an extremely effective A* algorithm, and providesstraightforward opportunities for separately improving the component models. Inparticular, I will mention some of the work we have done focusing on the PCFGcomponent to produce a very high accuracy unlexicalized grammar.<p>This is joint work with Dan Klein.<p>About the Speaker:<p>Christopher Manning is an Assistant Professor of Computer Science andLinguistics at Stanford University. He received his Ph.D. from StanfordUniversity in 1995, and served on the faculty of the Computational LinguisticsProgram at Carnegie Mellon University (1994-1996) and the University of SydneyLinguistics Department (1996-1999) before returning to Stanford. His researchinterests include probabilistic models of language, natural language parsing,constraint-based linguistic theories, syntactic typology, informationextraction and text mining, and computational lexicography. He is the author ofthree books, including Foundations of Statistical Natural Language Processing(MIT Press, 1999, with Hinrich Schuetze).<p>Chris' schedule is available in <a href="manning.ps">Postscript</a> or<a href="manning.pdf">PDF</a> format.<br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>17 Oct 2003</td>
<td align=left valign=top>Hovy, Marcu, Knight, Byrd, Narayanan, Traum, Gordon</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs17_Oct_2003');">
Introduction to CL Research
</a><br>
<span id=abs17_Oct_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:30 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The annual Computational Linguistics Open House will be held at USC's InformationSciences Institute from 3:00-4:30pm in the 11th floor Conference Room. Researchers fromISI, including Eduard Hovy, Daniel Marcu, and Kevin Knight will present overviews oftheir latest research.  We will also hear about the research activities of Dani Byrd ofthe Linguistics Department, Shri Narayanan's group in EE, and David Traum and AndrewGordon of USC's Institute for Creative Technologies.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>10 Oct 2003</td>
<td align=left valign=top>Philipp Koehn</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs10_Oct_2003');">
Advances in Statistical MT: Phrases, Noun Phrases and Beyond
</a><br>
<span id=abs10_Oct_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> (This is a practice run for I talk I will give a few times over the nextweeks when interviewing for job positions.)<p>I will review the state of the art in statistical machine translation(SMT), present my dissertation work, and sketch out the researchchallenges of syntactically structured statistical machine translation.<p>The currently best methods in SMT build on the translation of phrases (anysequences of words) instead of single words. Phrase translation pairs areautomatically learned from parallel corpora. While SMT systems generatetranslation output that often conveys a lot of the meaning of the originaltext, it is frequently ungrammatical and incoherent.<p>The research challenge at this point is to introduce syntactic knowledgeto the state of the art in order to improve translation quality. Myapproach breaks up the translation process along linguistic lines. I willpresent my thesis work on noun phrase translation and ideas about clausestructure.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>03 Oct 2003</td>
<td align=left valign=top>Anton Leuski</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs03_Oct_2003');">
A Year in Paradise
</a><br>
<span id=abs03_Oct_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I would like to talk about some of the things I did during the lastyear. I will discuss and demonstrate CuSTaRD, a cross-lingualinformation retrieval, organization, summarization, and visualizationsystem that was built for the Surprise Language exercise. I will focusin more details on iNeATS, the interactive multi-document summarizationpart of CuSTaRD. The other project I plan to present is eArchivarius, asystem for accessing collections of electronic mail.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 Oct 2003</td>
<td align=left valign=top>Ana-Maria Popescu</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_Oct_2003');">
TBA
</a><br>
<span id=abs02_Oct_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 4:00 pm - 5:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Sep 2003</td>
<td align=left valign=top>Beata Klebanov</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Sep_2003');">
Analyzing Sentences into Facts: Simple is Beautiful
</a><br>
<span id=abs15_Sep_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 2:30 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I present my summer project  - writing rule-based software forsimplifying texts. Task definition and motivations will bediscussed, as well as human and automatic evaluation, thelatter using a question answering system.<p>This is joint work with Daniel Marcu and Kevin Knight.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>12 Sep 2003</td>
<td align=left valign=top>Lara Taylor</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs12_Sep_2003');">
Discourse Coherence for Ordering Information
</a><br>
<span id=abs12_Sep_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 2:30 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In this talk, I look at how the notion of discourse coherence can bemodeled computationally. I begin with the following idea: if you takea text and shuffle its sentences into a random order, that text willno longer make sense. In other words, the text will be "incoherent".Our task is to learn how to reassemble a shuffled text into an orderthat humans would consider to be coherent.<p>I discuss practical and theoretical motivations for the task,evaluations of our model, increases in performance achieved over thesummer, and directions for future research.<p>This work was done in collaboration with Kevin Knight, Daniel Marcu,Jonathan Graehl and Nick Mote.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>05 Sep 2003</td>
<td align=left valign=top>Nishit Rathod and Anish Nair</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs05_Sep_2003');">
Deciphering Hindi Scripts
</a><br>
<span id=abs05_Sep_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> A major hurdle in building automated information retrieval systems forHindi text is the lack of an uniform encoding for text representation.Standards do exist, but noone seems interested. Every web contentpublisher seems to have their encoding system, making informationextraction a nightmare. We explore an unsupervised approach toconvert any given "unknown" encoding to UTF-8, by treating it as adecipherment problem. We also study how a little amount of supervisioncan improve decoding accuracy.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>03 Sep 2003</td>
<td align=left valign=top>Alex Fraser and Franz Och</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs03_Sep_2003');">
JHU MT Workshop
</a><br>
<span id=abs03_Sep_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We will present the results of the 2003 Johns Hopkins UniversitySummer Workshop on "Syntax for Statistical Machine Translation".<p>We will describe a large effort to extend a high-performingphrase-based MT system as baseline by adding new features representingsyntactic knowledge that deal with specific problems of the underlyingbaseline. We investigate a broad range of possible feature functions,from very simple binary features to sophisticated tree-to-treetranslation models. Simple feature functions test if a certainconstituent occurs in the source and the target language parsetree. More sophisticated features will be derived from an alignmentmodel where whole sub-trees in source and target can be aligned nodeby node. We present results on the Chinese-English large data track ofthe recent TIDES MT evaluations.<p>This is joint work with the other workshop team members: DanielGildea, Anoop Sarkar, Sanjeev Khudanpur, Kenji Yamada, Libin Shen,Shankar Kumar, David Smith, Viran Jain, Katherine Eng, Jin Zhen andDragomir Radev.<p>See <ahref="http://www.clsp.jhu.edu/ws03/groups/translate/">http://www.clsp.jhu.edu/ws03/groups/translate/</a>for more.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>29 Aug 2003</td>
<td align=left valign=top>Stefan Riezler</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs29_Aug_2003');">
Deepening Representations
</a><br>
<span id=abs29_Aug_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Aug 2003</td>
<td align=left valign=top>Michel Galley and Mark Hopkins</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Aug_2003');">
Syntax for Statistical MT
</a><br>
<span id=abs27_Aug_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>22 Aug 2003</td>
<td align=left valign=top>Satoshi Sekine</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs22_Aug_2003');">
Information Extraction, IR and QA
</a><br>
<span id=abs22_Aug_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>15 Aug 2003</td>
<td align=left valign=top>Beata Klebanov</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs15_Aug_2003');">
On Her Masters Research
</a><br>
<span id=abs15_Aug_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>01 Aug 2003</td>
<td align=left valign=top>Shou-de Lin</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs01_Aug_2003');">
Toward deciphering the 2-dimensional ancient Luwian script by discovering its writing order
</a><br>
<span id=abs01_Aug_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>29 Jul 2003</td>
<td align=left valign=top>Michael Brasser</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs29_Jul_2003');">
A Model of Word Movement for Machine Translation
</a><br>
<span id=abs29_Jul_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Small<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Jul 2003</td>
<td align=left valign=top>Jonathan Graehl and Kevin Knight</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Jul_2003');">
Super-Carmel for Trees
</a><br>
<span id=abs25_Jul_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>18 Jul 2003</td>
<td align=left valign=top>Doug Oard</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs18_Jul_2003');">
A Maryland Yankee in King Eduard's Court: Some Remarks on a Year in Paradise
</a><br>
<span id=abs18_Jul_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>27 Jun 2003</td>
<td align=left valign=top>Michael Fleischman</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs27_Jun_2003');">
Offline Strategies for Online Question Answering: Answering Questions Before They Are Asked and Maximum Entropy Models for FrameNet Classification
</a><br>
<span id=abs27_Jun_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 10 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>12 Jun 2003</td>
<td align=left valign=top>Dina Demner-Fushman</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs12_Jun_2003');">
Measuring the Effect of Dictionary Coverage on Cross-Language Retrieval
</a><br>
<span id=abs12_Jun_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 11:00 am - 12:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Bilingual term lists have proven to be a useful basis fordictionary-based Cross-Language Information Retrieval (CLIR), butthere is ample anecdotal evidence that differences in vocabularycoverage can have a substantial impact on retrieval effectiveness.This issue has recently been explored using ablation studies in whichprogressively smaller term lists were synthesized using samplingtechniques. The ablation techniques used in those studies have not,however, been validated using real terms lists. In this talk I willreport the results of what we believe is the first large coveragestudy use naturally occurring term lists. Thirty-five bilingual termslists were obtained from a variety of sources, each with English asone of the two paired languages. From these, we created 35English-to-English term lists by taking each term that was present inthe English side of the list as its own translation. When used withan English information retreval test collection, this allowed us tomeasure the reduction in retrieval effectivenss that could beattributed to deficiencies in the coverage of English terms. Eighttypes of untranslatable terms were identified in a collection of newsstories, of which named entitles were found to have the greatestimpact on retrieval effectiveness. Differences in named entitycoverage were found to produce large differences in retrievaleffectiveness for term lists of similar sizes. Controlling for namedentity effects yielded a clear relationship between retrievaleffectiveness and the size of the translatable English vocabulary.The functional dependence that we observed is consistent with onepreviously applied ablation technique and inconsistent with another.Our results indicate that the outcome of a widely cited landmark studyof query expansion effects for CLIR was likely affected by a flawedablation model. We conclude our talk with a suggestion for furtherwork on that topic, and a simple prescription for avoiding suchproblems in the future.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>23 May 2003</td>
<td align=left valign=top>Liang Zhou</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs23_May_2003');">
A Web-Trained Extraction Summarization System and Headline Summarization at ISI
</a><br>
<span id=abs23_May_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> 1) A serious bottleneck in the development of trainable text summarizationsystems is the shortage of training data. Constructing such data is a verytedious task, especially because there are in general many differentcorrect ways to summarize a text. Fortunately we can utilize the Internetas a source of suitable training data. In this paper, we present asummarization system that uses the web as the source of training data. Theprocedure involves structuring the articles downloaded from variouswebsites, building adequate corpora of (summary, text) and (extract,text) pairs, training on positive and negative data, and automaticallylearning to perform the task of extraction-based summarization systems.<p>2) Headlines are useful for users who only need information on the maintopics of a story. We present a headline summarization system that isbuilt at ISI for this purpose and is a top performer for DUC2003's task 1,generating very short summaries (10 words or less).<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>20 May 2003</td>
<td align=left valign=top>Michel Galley</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs20_May_2003');">
Discourse Segmentation of Multi-Party Conversation
</a><br>
<span id=abs20_May_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> <br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>16 May 2003</td>
<td align=left valign=top>Chin-Yew Lin</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs16_May_2003');">
Automatic Evaluation of Summaries Using N-gram Co-Occurrence Statistics
</a><br>
<span id=abs16_May_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Following the recent adoption by the machine translation community ofautomatic evaluation using the BLEU/NIST scoring process, we conduct anin-depth study of a similar idea for evaluating summaries. The resultsshow that automatic evaluation using unigram co-occurrences betweensummary pairs correlates surprising well with human evaluations, basedon various statistical metrics; while direct application of the BLEUevaluation procedure does not always give good results.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>09 May 2003</td>
<td align=left valign=top>Doug Oard</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs09_May_2003');">
Coping with Surprise: The Case of Cebuano
</a><br>
<span id=abs09_May_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> For ten days in March, nine research teams worked together to buildCebuano language resources and systems for a "dry run" the TIDES SupriseLanguage experiment. Cebuano is spoken widely in the southernPhillipines, but there had previously been little work on computationallinguistics for that language. As we prepare for the actual SupriseLanguage experiment this June, we will use this talk to look back on whatworked, what didn't, and what lessons there are to be learned from ourexperience in March. Come prepared to share the excitement, offer yourideas, and understand why we have tried to ask Ed to cancel all vacationsduring the month of June (just kidding...).<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>02 May 2003</td>
<td align=left valign=top>Hal Daum&eacute; III</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs02_May_2003');">
Acquiring Paraphrase Templates from Document/Abstract Pairs
</a><br>
<span id=abs02_May_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We present an approach to automatically extracting paraphrase templatesfrom document/abstract pairs. This methodology relies on word-basedalignments created by off-the-shelf software. Our paraphrases areevaluated by human evaluators for precision and automatically forapplicability. We find that 77% of the extracted paraphrases are judgedto be always correct and that the generalized templates of 60% arejudged to be applicable most of the time and 87% are judged to beapplicable sometimes.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>25 Apr 2003</td>
<td align=left valign=top>Quamrul Tipu</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs25_Apr_2003');">
Statistical MT with Bilingual Morphology
</a><br>
<span id=abs25_Apr_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Traditional statistical MT systems mostly work on the word-andphrase-level. For different language pairs, the performance of suchsystems vary from some 15% to 35%. These systems suffer from problemssuch as sparse data, with huge vocabulary sizes leading to lessreliable probability estimates. In our current research, we aim tocome up with a better MT system by looking inside the words. Almost inevery language, a root (stem) can have many different forms(inflectional, derivational, etc.). If we can identify the roots, thesize of the vocabulary will quite small, and we can have betterprobability estimates, reducing the sparse data problem andpotentially leading to higher accuracy. We are trying to come up witha model that induces morphology automatically from a bilingual corpusand achieves this improvement.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>04 Apr 2003</td>
<td align=left valign=top>Donghui Feng</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs04_Apr_2003');">
Natural Language Understanding in MRE
</a><br>
<span id=abs04_Apr_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> In this talk, I will present my current work on language understandingin the project, Mission Rehearsal Exercise(MRE). One of the challengesin a dialogure system is to provide a robust understanding/parsingcompoment. We applied both Finte State Model and Statistical LearningModel for the parsing of separate sentences of dialogue utterances.Their performances are evaluated and compared with a new blind set.And we hope to incorporate them to make a better solution in thisspecific application.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>21 Mar 2003</td>
<td align=left valign=top>Gareth Jones</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs21_Mar_2003');">
An Investigation of the Application of Broad Coverage Automatic Pronoun Resolution in Information Retrieval
</a><br>
<span id=abs21_Mar_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Term weighting methods have been shown to give significant increasesin information retrieval performance. Term weights are typicallycalculated using frequency counts across the whole retrievalcollection, frequency of each term within individual documents andcompensation for varying document length. The presence of pronomialreferences in documents effectively reduces the within document termfrequency of associated words with a consequent effect on term weightsand information retrieval behaviour. This presentation will describean experimental investigation into the impact on information retrievalperformance of broad coverage automatic pronoun resolution. Resultsusing a standard information retieval test collection indicate thatcalculating term weights using a pronoun resolved version of thedocument test collection can improve both fixed cutoff and averageretrieval precision.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>14 Mar 2003</td>
<td align=left valign=top>Kareem Darwish</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs14_Mar_2003');">
Improving the Efficiency and Effectiveness of Structured Query Methods
</a><br>
<span id=abs14_Mar_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> One of the key challenges in retrieval is what to do when a query termneeds to be replaced with more than one term. This problem arises inapplications such as cross language information retrieval andthesaurus expansion. One solution is to use structured query methods,which treat all the possible replacements as if they were one queryterm by computing a joint document frequency and a joint termfrequency. This presentation will review prior work on structuredquery techniques and then introduce three new variants that aim toimprove computational efficiency and to leverage estimates ofreplacement probabilities to improve retrieval effectiveness. Themethods have now been tested in cross-language retrieval andOCR-degraded text retrieval applications in which replacementprobability estimates could be estimated. In both applications, thenew structured query methods showed statistically significantimprovements in retrieval effectiveness over previously knownstructured query methods.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Mar 2003</td>
<td align=left valign=top>Scott Klemmer</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Mar_2003');">
Books with Voices: Paper Transcripts as a Tangible Interface to Oral Histories
</a><br>
<span id=abs07_Mar_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Our contextual inquiry into the practices of oralhistorians uneartheda curious incongruity. While oral historians consider interviewrecordings a central historical artifact, these recordingssit unusedafter a written transcript is produced. We hypothesizedthat this islargely because books are more usable than recordings.Therefore, wecreated Books with Voices: bar-code augmented paper transcriptsenabling fast, random access to digital video interviews ona PDA. Wepresent quantitative results of an evaluation of this tangibleinterface with 13 participants. They found this lightweight,structured access to original recordings to offersubstantial benefitswith minimal overhead. Oral historians found a level ofemotion in thevideo not available in the printed transcript. The videoalso helpedreaders clarify the text and observe nonverbal cues.<p><ahref="http://guir.berkeley.edu/oral-history/">http://guir.berkeley.edu/oral-history/<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>28 Feb 2003</td>
<td align=left valign=top>Radu Soricut</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs28_Feb_2003');">
Sentence Level Discourse Parsing using Syntactic and Lexical Information
</a><br>
<span id=abs28_Feb_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> We introduce two probabilistic models that can be used to identifyelementary discourse units and build sentence-level discourse parsetrees. The models use syntactic and lexical features. A discourse parsingalgorithm that implements these models derives discourse parse trees withan error reduction of 18.8\% over a state-of-the-art decision-baseddiscourse parser. A set of empirical evaluations shows that our discourseparsing model is sophisticated enough to yield discourse trees at anaccuracy level that matches near-human levels of performance.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>21 Feb 2003</td>
<td align=left valign=top>Nate Chambers</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs21_Feb_2003');">
Statistical Language Generation in a Dialogue System
</a><br>
<span id=abs21_Feb_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> The large corpora of written text that is available to the languagecommunity has largely been utilized for language understanding; it hassomewhat been ignored in the context of language generation. Recentdevelopments in stochastic generation have allowed such systems to shiftthe burden from hand crafted databases (lexicons, grammars, ontologies) tothe knowledge implicitly found in written text. However, when building adialogue system, generation is largely interactive, very different fromthe written structure of most corpora.<p>In this talk, I will discuss my recent work at applying a stochasticgenerator, HALogen, and its newswire language model to a dialogue system,TRIPS. I'll describe the difficulties in mapping the TRIPS semantic forminto HALogen's representation, the critical differences between newswireand dialogue, and the possibility of using HALogen and a large newswiremodel as a domain independent generator.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>07 Feb 2003</td>
<td align=left valign=top>Jeongwon Cha</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs07_Feb_2003');">
Automatic Pattern Learning for Information Extraction using Web Data
</a><br>
<span id=abs07_Feb_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I will give a status report work on information extraction during last10 months. The motivation of this work is to learn extractionpatterns automatically using seed template and web search engine. Myapproach is to generate linguistics patterns and surface patterns andcombine them to compenstate for the respective weaknesses of twopatterns. On the DUC01-test-disasters (67 documents),DUC01-training-disasters (54 documents) I got a 0.34/0.26 f-measurerespectively. In this talk, I will give a status report on ReADproject (with Dr. Chin-Yew Lin).<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>31 Jan 2003</td>
<td align=left valign=top>Philipp Koehn</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs31_Jan_2003');">
Noun Phrase Translation
</a><br>
<span id=abs31_Jan_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> I will give a status report on my current thesis work onnoun phrase translation. The motivation of this work isto break up the machine translation problem into smaller,more manageable units. The treatment of noun phrase translationas a subtask of machine translation is both linguisticallyand empirically motivated. My approach is to generatea n-best list of candidate translations with a statisticalmachine translation system and rerank the candidates withadditional features. For about 90% of all noun phrases wecan find an acceptable translation in the 100-best list, whilean acceptable translation comes out on the very top for onlyabout 60% of the noun phrases. I will discuss a variety oflinguistic and empirical features that (may) help to movethe acceptable translations higher in the list. I will alsopresent results modeling issues such as phrase basedtranslation and compound splitting. This talk is alsointended as a fishing expedition for feature suggestions bythe audience.<p><br>
</font>
</span>
</td></tr><tr class="speakerItem" border=0 >
<td align=left valign=top>24 Jan 2003</td>
<td align=left valign=top>Doug Oard &amp; Anton Leuski</td>
<td align=left valign=top>
<a onMouseOver="window.status='View abstract'; return true" onMouseOut="window.status=' '; return true" href="javascript:exp_coll('abs24_Jan_2003');">
Access to Archival Collections of Electronic Mail
</a><br>
<span id=abs24_Jan_2003 style="display:none;">
<font size=-1>
<b>Time:</b> 3:00 pm - 4:00 pm<br>
<b>Location:</b> 11 Large<br>
<b>Abstract:</b> Since its inception more than 30 years ago, electronic mail (email)has developed into a powerful communication medium with applicationsthat extend well beyond simple asynchronous message exchange betweenindividuals. Automated tools to support the use of email inindividual, organizational and social contexts have receivedincreasing attention in recent years. Among the tasks that are nowsupported are filtering (e.g., spam detection), aggregation (e.g.,mailing list digests), workflow management (e.g., help desk routing),and reuse (e.g., retrospective search). We are interested in howtoday's email will be used in the future -- some will certainly bepreserved (indeed, some MUST be preserved!), and those records willserve as powerful evidence of how we lived our lives and organized oursocieties. The challenges of managing many types of electronic recordcollections are receiving increasing attention, but we are not awareof any work yet on supporting access to electronic mail archives.That will be the focus of this talk.<p>We will introduce the Open Archival Information Systems (OAIS) model,and then focus on two key processes: ingestion and access. Our focusin ingestion is on support for review and redaction, which we believewill be key enablers to acquisition and near-term access. For access,we will address both browsing based on provenance (original order) anduser-guided reorganization based on search and visualization. Alongthe way, we will identify potentially productive opportunities toapply natural language processing technologies such as topicsegmentation, link detection, and summarization. We will thendescribe two test collections, and demonstrate a system that we havedeveloped to explore user-guided reorganization through visualizationfor one of those collections. We will conclude the talk by sketchingout a research agenda. At that point, we will expect suggestions andcomments from the audience. Knowing this audience, it is unlikelythat we will need to wait that long :-).<p><br>
</font>
</span>
</td></tr></table><br><br>
<div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
This web page was last generated on Mon Oct 03 16:29:03 2011.<br>
</font></div>
</body></html>
