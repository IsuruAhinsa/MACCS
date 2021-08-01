<?php

use App\Category;
use App\Group;
use Illuminate\Database\Seeder;

class GroupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->delete();

        foreach (Group::groups() as $group) {
            $group = Group::create(['group_name' => $group]);
            foreach (Category::categories() as $category) {
                Category::create([
                    'group_id' => $group->id,
                    'category_name' => $category,
                ]);
            }
        }

       $values = [
           ['category_id' => 1, 'checklist' => 'Begins to smile at people'],
           ['category_id' => 1, 'checklist' => 'Can briefly calm himself (may bring hands to mouth and suck on hand)'],
           ['category_id' => 1, 'checklist' => 'Tries to look at parent'],
           ['category_id' => 2, 'checklist' => 'Coos, makes gurgling sounds'],
           ['category_id' => 2, 'checklist' => 'Turns head toward sounds'],
           ['category_id' => 3, 'checklist' => 'Pays attention to faces'],
           ['category_id' => 3, 'checklist' => 'Begins to follow things with eyes and recognize people at
a distance'],
           ['category_id' => 3, 'checklist' => 'Begins to act bored (cries, fussy) if activity doesn’t change'],
           ['category_id' => 4, 'checklist' => 'Can hold head up and begins to push up when lying on tummy'],
           ['category_id' => 4, 'checklist' => 'Makes smoother movements with arms and legs'],
           ['category_id' => 5, 'checklist' => 'Cuddle, talk, and play with your baby during feeding,
dressing, and bathing'],
           ['category_id' => 5, 'checklist' => 'Help your baby learn to calm herself. It’s okay for
her to suck on her fingers'],
           ['category_id' => 5, 'checklist' => 'Begin to help your baby get into a routine,
such as sleeping at night more than in the day,
and have regular schedules.'],
           ['category_id' => 5, 'checklist' => 'Getting in tune with your baby’s likes and dislikes
can help you feel more comfortable and confident.'],
           ['category_id' => 5, 'checklist' => 'Act excited and smile when your baby
makes sounds.'],
           ['category_id' => 5, 'checklist' => ' Copy your baby’s sounds sometimes, but also use
clear language'],
           ['category_id' => 5, 'checklist' => 'Pay attention to your baby’s different cries so that
you learn to know what he wants.'],
           ['category_id' => 5, 'checklist' => 'Talk, read, and sing to your baby.'],
           ['category_id' => 5, 'checklist' => 'Play peek-a-boo. Help your baby play
peek-a-boo, too.'],
           ['category_id' => 5, 'checklist' => 'Place a baby-safe mirror in your baby’s crib so
she can look at herself'],
           ['category_id' => 5, 'checklist' => 'Look at pictures with your baby and talk
about them'],
           ['category_id' => 5, 'checklist' => 'Lay your baby on his tummy when he is awake
and put toys near him.'],
           ['category_id' => 5, 'checklist' => 'Encourage your baby to lift his head by holding
toys at eye level in front of him.'],
           ['category_id' => 5, 'checklist' => 'Hold a toy or rattle above your baby’s head and
encourage her to reach for it'],
           ['category_id' => 5, 'checklist' => 'Hold your baby upright with his feet on the floor.
Sing or talk to your baby as he is upright'],
           ['category_id' => 6, 'checklist' => 'Smiles spontaneously, especially at people'],
           ['category_id' => 6, 'checklist' => 'Likes to play with people and might cry when playing stops'],
           ['category_id' => 6, 'checklist' => 'Copies some movements and facial expressions, like smiling
or frowning'],
           ['category_id' => 7, 'checklist' => ' Begins to babble'],
           ['category_id' => 7, 'checklist' => 'Babbles with expression and copies sounds he hears'],
           ['category_id' => 7, 'checklist' => 'Cries in different ways to show hunger, pain, or being tired'],
           ['category_id' => 8, 'checklist' => 'Lets you know if she is happy or sad'],
           ['category_id' => 8, 'checklist' => 'Responds to affection'],
           ['category_id' => 8, 'checklist' => 'Reaches for toy with one hand'],
           ['category_id' => 8, 'checklist' => ' Uses hands and eyes together, such as seeing a toy
and reaching for it'],
           ['category_id' => 8, 'checklist' => 'Follows moving things with eyes from side to side'],
           ['category_id' => 8, 'checklist' => 'Watches faces closely'],
           ['category_id' => 8, 'checklist' => 'Recognizes familiar people and things at a distance'],
           ['category_id' => 9, 'checklist' => 'Holds head steady, unsupported'],
           ['category_id' => 9, 'checklist' => 'Pushes down on legs when feet are on a hard surface'],
           ['category_id' => 9, 'checklist' => 'May be able to roll over from tummy to back'],
           ['category_id' => 9, 'checklist' => 'Can hold a toy and shake it and swing at dangling toys'],
           ['category_id' => 9, 'checklist' => 'Brings hands to mouth'],
           ['category_id' => 9, 'checklist' => 'When lying on stomach, pushes up to elbows'],
           ['category_id' => 10, 'checklist' => 'Hold and talk to your baby; smile and be cheerful while you do'],
           ['category_id' => 10, 'checklist' => 'Set steady routines for sleeping and feeding.'],
           ['category_id' => 10, 'checklist' => ' Pay close attention to what your baby likes and doesn’t like; you will know how best to meet his needs and what you can do to make your
baby happy.'],
           ['category_id' => 10, 'checklist' => 'Copy your baby’s sounds'],
           ['category_id' => 10, 'checklist' => 'Act excited and smile when your baby makes
sounds'],
           ['category_id' => 10, 'checklist' => 'Have quiet play times when you read or sing to
your baby'],
           ['category_id' => 10, 'checklist' => 'Give age-appropriate toys to play with, such as
rattles or colorful pictures'],
           ['category_id' => 10, 'checklist' => 'Play games such as peek-a-boo.'],
           ['category_id' => 10, 'checklist' => 'Provide safe opportunities for your baby to reach
for toys and explore his surroundings.'],
           ['category_id' => 10, 'checklist' => 'Put toys near your baby so that she can reach for
them or kick her feet'],
           ['category_id' => 10, 'checklist' => 'Put toys or rattles in your baby’s hand and help
him to hold them'],
           ['category_id' => 10, 'checklist' => 'Hold your baby upright with feet on the floor,
and sing or talk to your baby as she “stands”
with support.'],
           ['category_id' => 11, 'checklist' => 'Knows familiar faces and begins to know if someone is
a stranger'],
           ['category_id' => 11, 'checklist' => 'Likes to play with others, especially parents'],
           ['category_id' => 11, 'checklist' => 'Responds to other people’s emotions and often seems happy'],
           ['category_id' => 11, 'checklist' => 'Likes to look at self in a mirror'],
           ['category_id' => 12, 'checklist' => 'Responds to sounds by making sounds'],
           ['category_id' => 12, 'checklist' => 'Strings vowels together when babbling (“ah,” “eh,” “oh”)
and likes taking turns with parent while making sounds'],
           ['category_id' => 12, 'checklist' => 'Responds to own name'],
           ['category_id' => 12, 'checklist' => 'Makes sounds to show joy and displeasure'],
           ['category_id' => 12, 'checklist' => 'Begins to say consonant sounds (jabbering with “m,” “b”)'],
           ['category_id' => 13, 'checklist' => 'Looks around at things nearby'],
           ['category_id' => 13, 'checklist' => 'Brings things to mouth'],
           ['category_id' => 13, 'checklist' => 'Shows curiosity about things and tries to get things that are
out of reach'],
           ['category_id' => 13, 'checklist' => 'Begins to pass things from one hand to the other'],
           ['category_id' => 14, 'checklist' => 'Rolls over in both directions (front to back, back to front)'],
           ['category_id' => 14, 'checklist' => 'Begins to sit without support'],
           ['category_id' => 14, 'checklist' => 'When standing, supports weight on legs and might bounce'],
           ['category_id' => 14, 'checklist' => 'Rocks back and forth, sometimes crawling backward before
moving forward'],
           ['category_id' => 15, 'checklist' => 'Play on the floor with your baby every day'],
           ['category_id' => 15, 'checklist' => 'Learn to read your baby’s moods. If he’s happy,
keep doing what you are doing. If he’s upset, take a
break and comfort your baby'],
           ['category_id' => 15, 'checklist' => 'Show your baby how to comfort herself when she’s
upset. She may suck on her fingers to self soothe.'],
           ['category_id' => 15, 'checklist' => 'Use “reciprocal” play—when he smiles, you smile;
when he makes sounds, you copy them'],
           ['category_id' => 15, 'checklist' => 'Repeat your child’s sounds and say simple words
with those sounds. For example, if your child says
“bah,” say “bottle” or “book.”'],
           ['category_id' => 15, 'checklist' => 'Read books to your child every day. Praise her when
she babbles and “reads” too'],
           ['category_id' => 15, 'checklist' => 'When your baby looks at something, point to it and
talk about it'],
           ['category_id' => 15, 'checklist' => 'When he drops a toy on the floor, pick it up and give
it back. This game helps him learn cause and effect.'],
           ['category_id' => 15, 'checklist' => 'Read colorful picture books to your baby.'],
           ['category_id' => 15, 'checklist' => 'Point out new things to your baby and name them'],
           ['category_id' => 15, 'checklist' => 'Show your baby bright pictures in a magazine and
name them'],
           ['category_id' => 15, 'checklist' => 'Hold your baby up while she sits or support her
with pillows. Let her look around and give her toys
to look at while she balances'],
           ['category_id' => 15, 'checklist' => 'Put your baby on his tummy or back and put toys
just out of reach. Encourage him to roll over to reach
the toys.'],
           ['category_id' => 16, 'checklist' => 'May be afraid of strangers'],
           ['category_id' => 16, 'checklist' => 'May be clingy with familiar adults'],
           ['category_id' => 16, 'checklist' => 'Has favorite toys'],
           ['category_id' => 17, 'checklist' => 'Understands “no”'],
           ['category_id' => 17, 'checklist' => 'Makes a lot of different sounds like “mamamama” and
“bababababa”'],
           ['category_id' => 17, 'checklist' => 'Copies sounds and gestures of others'],
           ['category_id' => 17, 'checklist' => 'Uses fingers to point at things'],
           ['category_id' => 18, 'checklist' => 'Watches the path of something as it falls'],
           ['category_id' => 18, 'checklist' => 'Looks for things he sees you hide'],
           ['category_id' => 18, 'checklist' => 'Plays peek-a-boo'],
           ['category_id' => 18, 'checklist' => 'Puts things in her mouth'],
           ['category_id' => 18, 'checklist' => 'Moves things smoothly from one hand to the other'],
           ['category_id' => 18, 'checklist' => 'Picks up things like cereal o’s between thumb and index finger'],
           ['category_id' => 19, 'checklist' => 'Stands, holding on'],
           ['category_id' => 19, 'checklist' => 'Can get into sitting position'],
           ['category_id' => 19, 'checklist' => 'Sits without support'],
           ['category_id' => 19, 'checklist' => 'Pulls to stand'],
           ['category_id' => 19, 'checklist' => 'Crawls'],
           ['category_id' => 20, 'checklist' => 'Pay attention to the way he reacts to new situations
and people; try to continue to do things that make
your baby happy and comfortable.'],
           ['category_id' => 20, 'checklist' => ' As she moves around more, stay close so she knows
that you are near'],
           ['category_id' => 20, 'checklist' => ' Continue with routines; they are especially
important now.'],
           ['category_id' => 20, 'checklist' => 'Play games with “my turn, your turn.”'],
           ['category_id' => 20, 'checklist' => 'Say what you think your baby is feeling. For example,
say, “You are so sad, let’s see if we can make you
feel better.”'],
           ['category_id' => 20, 'checklist' => 'Describe what your baby is looking at; for example,
“red, round ball.”'],
           ['category_id' => 20, 'checklist' => 'Talk about what your baby wants when he points
at something'],
           ['category_id' => 20, 'checklist' => 'Copy your baby’s sounds and words'],
           ['category_id' => 20, 'checklist' => 'Ask for behaviors that you want. For example,
instead of saying “don’t stand,” say “time to sit.”'],
           ['category_id' => 20, 'checklist' => 'Teach cause-and-effect by rolling balls back and
forth, pushing toy cars and trucks, and putting blocks
in and out of a container'],
           ['category_id' => 20, 'checklist' => 'Play peek-a-boo and hide-and-seek'],
           ['category_id' => 20, 'checklist' => 'Read and talk to your baby'],
           ['category_id' => 20, 'checklist' => 'Provide lots of room for your baby to move and
explore in a safe area.'],
           ['category_id' => 20, 'checklist' => 'Put your baby close to things that she can pull up
on safely.'],
           ['category_id' => 21, 'checklist' => 'Is shy or nervous with strangers'],
           ['category_id' => 21, 'checklist' => 'Cries when mom or dad leaves'],
           ['category_id' => 21, 'checklist' => 'Has favorite things and people'],
           ['category_id' => 21, 'checklist' => 'Shows fear in some situations'],
           ['category_id' => 21, 'checklist' => 'Hands you a book when he wants to hear a story'],
           ['category_id' => 21, 'checklist' => 'Repeats sounds or actions to get attention'],
           ['category_id' => 21, 'checklist' => 'Puts out arm or leg to help with dressing'],
           ['category_id' => 21, 'checklist' => 'plays games such as “peek-a-boo” and “pat-a-cake”'],
           ['category_id' => 22, 'checklist' => 'Responds to simple spoken requests'],
           ['category_id' => 22, 'checklist' => 'o Uses simple gestures, like shaking head “no”
or waving “bye-bye”'],
           ['category_id' => 22, 'checklist' => 'Makes sounds with changes in tone (sounds more like speech)'],
           ['category_id' => 22, 'checklist' => 'Says “mama” and “dada” and exclamations like “uh-oh!”'],
           ['category_id' => 22, 'checklist' => 'Tries to say words you say'],
           ['category_id' => 23, 'checklist' => 'Explores things in different ways, like shaking,
banging, throwing'],
           ['category_id' => 23, 'checklist' => 'Finds hidden things easily'],
           ['category_id' => 23, 'checklist' => 'Looks at the right picture or thing when it’s named'],
           ['category_id' => 23, 'checklist' => 'Copies gestures'],
           ['category_id' => 23, 'checklist' => 'Starts to use things correctly; for example, drinks from
a cup, brushes hair'],
           ['category_id' => 23, 'checklist' => 'Bangs two things together'],
           ['category_id' => 23, 'checklist' => 'Puts things in a container, takes things out of a container'],
           ['category_id' => 23, 'checklist' => 'Lets things go without help'],
           ['category_id' => 23, 'checklist' => 'Pokes with index (pointer) finger'],
           ['category_id' => 23, 'checklist' => 'Follows simple directions like “pick up the toy”'],
           ['category_id' => 24, 'checklist' => 'Gets to a sitting position without help'],
           ['category_id' => 24, 'checklist' => 'Pulls up to stand, walks holding on to furniture (“cruising”)'],
           ['category_id' => 24, 'checklist' => 'May take a few steps without holding on'],
           ['category_id' => 24, 'checklist' => 'May stand alone'],
           ['category_id' => 25, 'checklist' => 'Give your child time to get to know a new caregiver.
Bring a favorite toy, stuffed animal, or blanket to help
comfort your child'],
           ['category_id' => 25, 'checklist' => 'In response to unwanted behaviors, say “no” firmly.
Do not yell, spank, or give long explanations. A time
out for 30 seconds to 1 minute might help redirect
your child.'],
           ['category_id' => 25, 'checklist' => 'Give your child lots of hugs, kisses, and praise for
good behavior'],
           ['category_id' => 25, 'checklist' => 'Spend a lot more time encouraging wanted behaviors
than punishing unwanted behaviors (4 times as much
encouragement for wanted behaviors as redirection
for unwanted behaviors).'],
           ['category_id' => 25, 'checklist' => 'Talk to your child about what you’re doing. For
example, “Mommy is washing your hands with a
washcloth.”'],
           ['category_id' => 25, 'checklist' => 'Read with your child every day. Have your child
turn the pages. Take turns labeling pictures with
your child'],
           ['category_id' => 25, 'checklist' => 'Build on what your child says or tries to say, or
what he points to. If he points to a truck and says
“t” or “truck,” say, “Yes, that’s a big, blue truck.”'],
           ['category_id' => 25, 'checklist' => 'Give your child crayons and paper, and let your child
draw freely. Show your child how to draw lines up
and down and across the page. Praise your child when she tries to copy them.'],
           ['category_id' => 25, 'checklist' => 'Play with blocks, shape sorters, and other toys that
encourage your child to use his hands'],
           ['category_id' => 25, 'checklist' => 'Hide small toys and other things and have your
child find them'],
           ['category_id' => 25, 'checklist' => 'Ask your child to label body parts or things you see
while driving in the car'],
           ['category_id' => 25, 'checklist' => 'Sing songs with actions, like “The Itsy Bitsy Spider”
and “Wheels on the Bus.” Help your child do the
actions with you'],
           ['category_id' => 25, 'checklist' => 'Give your child pots and pans or a small musical
instrument like a drum or cymbals. Encourage your
child to make noise.'],
           ['category_id' => 25, 'checklist' => 'Provide lots of safe places for your toddler to explore.
(Toddler-proof your home. Lock away products for
cleaning, laundry, lawn care, and car care. Use a safety
gate and lock doors to the outside and the basement.)'],
           ['category_id' => 25, 'checklist' => 'Give your child push toys like a wagon or “kiddie
push car.”'],
           ['category_id' => 26, 'checklist' => 'Likes to hand things to others as play'],
           ['category_id' => 26, 'checklist' => 'May have temper tantrums'],
           ['category_id' => 26, 'checklist' => 'May be afraid of strangers'],
           ['category_id' => 26, 'checklist' => 'Shows affection to familiar people'],
           ['category_id' => 26, 'checklist' => 'Plays simple pretend, such as feeding a doll'],
           ['category_id' => 26, 'checklist' => 'May cling to caregivers in new situations'],
           ['category_id' => 26, 'checklist' => 'Points to show others something interesting'],
           ['category_id' => 26, 'checklist' => 'Explores alone but with parent close by'],
           ['category_id' => 27, 'checklist' => 'Says several single words'],
           ['category_id' => 27, 'checklist' => 'Says and shakes head “no”'],
           ['category_id' => 27, 'checklist' => 'Points to show someone what he wants'],
           ['category_id' => 28, 'checklist' => 'Knows what ordinary things are for; for example, telephone,
brush, spoon'],
           ['category_id' => 28, 'checklist' => 'Points to get the attention of others'],
           ['category_id' => 28, 'checklist' => 'Shows interest in a doll or stuffed animal by pretending to feed'],
           ['category_id' => 28, 'checklist' => 'Points to one body part'],
           ['category_id' => 28, 'checklist' => 'Scribbles on his own'],
           ['category_id' => 28, 'checklist' => 'Can follow 1-step verbal commands without any gestures;
for example, sits when you say “sit down”
'],
           ['category_id' => 29, 'checklist' => 'Walks alone'],
           ['category_id' => 29, 'checklist' => 'May walk up steps and run'],
           ['category_id' => 29, 'checklist' => 'Pulls toys while walking'],
           ['category_id' => 29, 'checklist' => 'Can help undress herself'],
           ['category_id' => 29, 'checklist' => 'Drinks from a cup'],
           ['category_id' => 29, 'checklist' => 'Eats with a spoon'],
           ['category_id' => 30, 'checklist' => 'Provide a safe, loving environment. It’s important
to be consistent and predictable.'],
           ['category_id' => 30, 'checklist' => 'Praise good behaviors more than you punish bad
behaviors (use only very brief time outs).'],
           ['category_id' => 30, 'checklist' => 'Describe her emotions. For example, say, “You are
happy when we read this book.”'],
           ['category_id' => 30, 'checklist' => 'Encourage pretend play'],
           ['category_id' => 30, 'checklist' => 'Encourage empathy. For example, when he sees a
child who is sad, encourage him to hug or pat the
other child'],
           ['category_id' => 30, 'checklist' => 'Read books and talk about the pictures using
simple words.'],
           ['category_id' => 30, 'checklist' => 'Copy your child’s words'],
           ['category_id' => 30, 'checklist' => 'Use words that describe feelings and emotions'],
           ['category_id' => 30, 'checklist' => 'Use simple, clear phrases'],
           ['category_id' => 30, 'checklist' => 'Ask simple questions.'],
           ['category_id' => 30, 'checklist' => 'Hide things under blankets and pillows and
encourage him to find them'],
           ['category_id' => 30, 'checklist' => 'Play with blocks, balls, puzzles, books, and toys
that teach cause and effect and problem solving.'],
           ['category_id' => 30, 'checklist' => 'Name pictures in books and body parts.'],
           ['category_id' => 30, 'checklist' => 'Provide toys that encourage pretend play; for
example, dolls, play telephones'],
           ['category_id' => 30, 'checklist' => 'Provide safe areas for your child to walk and
move around in'],
           ['category_id' => 30, 'checklist' => 'Provide toys that she can push or pull safely'],
           ['category_id' => 30, 'checklist' => 'Provide balls for her to kick, roll, and throw'],
           ['category_id' => 30, 'checklist' => 'Encourage him to drink from his cup and use a
spoon, no matter how messy'],
           ['category_id' => 30, 'checklist' => 'Blow bubbles and let your child pop them'],



       ];

        DB::table('checklists')->insert($values);
    }
}
